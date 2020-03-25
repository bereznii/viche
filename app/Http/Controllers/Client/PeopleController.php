<?php

namespace App\Http\Controllers\Client;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeopleController extends Controller
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
        $users = User::select(['id', 'name'])->get();

        return view('client.people', [
            'users' => $users
        ]);
    }
}
