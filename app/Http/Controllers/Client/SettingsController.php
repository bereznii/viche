<?php

namespace App\Http\Controllers\Client;

use App\Entities\Setting;
use App\Entities\User;
use App\Entities\UserSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $settings = UserSetting::with('setting')->get()->pluck('value', 'setting.name')->toArray();

        return view('client.settings', [
            'settings' => $settings
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $user->name = request('name');
        $user->email = request('email');

        if (!empty(request('password'))) {
            $user->password = Hash::make(request('password'));
        }

        $user->save();

        $uploadedFile = $request->file('profilePhoto');
        if (isset($uploadedFile)) {
            $path = $uploadedFile->storeAs(
                'public/users', $userId . time() . '.' . $uploadedFile->getClientOriginalExtension()
            );

            $path = str_replace('public', 'storage', $path);

            UserSetting::updateOrCreate([
                'user_id' => $userId,
                'setting_id' => 1,
            ],
            [
                'user_id' => $userId,
                'setting_id' => 1,
                'value' => $path
            ]);
        }

        $userName = request('username');
        if (strpos($userName, '@') === false) {
            $userName = '@' . $userName;
        }

        UserSetting::updateOrCreate([
            'user_id' => $userId,
            'setting_id' => 2,
        ],
        [
            'user_id' => $userId,
            'setting_id' => 2,
            'value' => $userName
        ]);

        return redirect()->route('settings');
    }
}
