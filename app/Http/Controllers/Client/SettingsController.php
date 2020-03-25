<?php

namespace App\Http\Controllers\Client;

use App\Entities\Setting;
use App\Entities\User;
use App\Entities\UserSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
