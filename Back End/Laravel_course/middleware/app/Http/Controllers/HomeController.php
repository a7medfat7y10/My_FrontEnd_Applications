<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        return view('home');


        //first way
//        $request->session()->put(['ahmed2'=>'master2']);
//        $request->session()->get('ahmed', 'token');


        //global session way
//        session(['ahmed'=>'master']);
//        return session('ahmed');




        //to delete
//        $request->session()->forget('ahmed2');

        //to show all
//        return $request->session()->all();

        //first time u will see the session but after that it will be gone
//        $request->session()->flash('ahmed3', 'this session will be set one time only');
//        return $request->session()->get('ahmed3');
    }
}
