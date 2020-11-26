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

//        MedicalEquipment::create([
//            'countmt' => '1',
//            'namemo' => 'qwe',
//            'sostoy' => 'Не работающеее',
//            'datavv' => '01.06.2003',
//            'region'=> 'Акмолинская область',
//            'raion'=> 'qwe',
//            'namemt'=>'qwe'
//        ]);

////        $tests = Test::all();
////        dd($tests);
//
//        $asd =  DB::connection()->getMongoClient()->listDatabases();
//        dd($asd);
        return view('home');
    }

    public function MEIndex(){
        $me = MedicalEquipment::all();
        foreach ($me as $m ){
            dd($m->namemo);
        }

        dd($me);
        return view('home');
    }

    public function MEcreate(){
        $me = MedicalEquipment::create([
            'countmt' => '1',
            'namemo' => 'qwe',
            'sostoy' => 'Не работающеее',
            'datavv' => '01.06.2003',
            'region'=> 'Акмолинская область',
            'raion'=> 'qwe',
            'namemt'=>'qwe'
        ]);

        dd($me);
        return view('home');
    }

    public function MEUpdate(){
        $id = '5fbf62978c9c82dfc05dea2c';
        $me = MedicalEquipment::find($id);
        $me->countmt = 2;
        $me->namemo = 'asd';
        $me->region = "asdasd1";
        $me->namemt = "zx";
        $me->save();
        dd($me->region);
        return view('home');
    }

    public function MEDelete(){
        $id = '5fbf62978c9c82dfc05dea2b';
        $me = MedicalEquipment::find($id);
        $me->delete();
        dd($me->region);
        return view('home');
    }

    public function MEsearch(){
        $name_ru = "передвижной";
        $me = MedicalEquipment::where('namemt', 'LIKE', '%' . $name_ru . '%')
        ->get();
        dd($me);
        return view('home');
    }
}
