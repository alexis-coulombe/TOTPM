<?php

namespace App\Http\Controllers;

use App\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        $codes = Code::where(['user_id' => Auth::user()->id])->get();

        return view('pages.home')->with('codes', $codes);
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('login'));
    }
}
