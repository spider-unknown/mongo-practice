<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test() {
//        Test::create([
//            'name' => 'Uraaa'
//        ]);
        
        $tests = Test::all();
        dd($tests);
        return view('home');
    }
}
