<?php

namespace App\Http\Controllers;

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
//    zwracanie widoku w zaleznosci od rodzaju konta 0=user, 1=admin
        public function index()
        {
        if(Auth::id()){
            $konto = Auth()->user()->konto;
            if($konto==0){
            return view('user');
            }
            else if($konto==1){
            return view('admin');
            }
            else{
                return view('strona');
            }
            }

        }
    
}
