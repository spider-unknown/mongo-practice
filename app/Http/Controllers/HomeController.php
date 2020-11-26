<?php

namespace App\Http\Controllers;

use App\MedicalEquipment;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mt_count= MedicalEquipment::count('countmt');
        return view('admin.content.welcome',compact('mt_count'));
    }
}
