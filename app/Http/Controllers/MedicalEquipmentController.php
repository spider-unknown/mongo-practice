<?php



namespace App\Http\Controllers;

use App\MedicalEquipment;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicalEquipmentController extends Controller
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
        $mts = MedicalEquipment::orderBy('created_at', 'desc')->paginate(10);
        $namemt = null;
        return view('admin.content.medical_equipment.index',compact('mts','namemt'));
    }

    public function create(){
        $mt = new MedicalEquipment();
        return view('admin.content.medical_equipment.create',compact('mt'));
    }

    public function store(Request $request)
    {
        $me = MedicalEquipment::create([
            'countmt' => $request->countmt,
            'namemo' => $request->namemo,
            'sostoy' => 'Работающеее',
            'datavv' => '01.06.2020',
            'region' => $request->region,
            'raion' => $request->raion,
            'namemt' => $request->namemt
        ]);


        return redirect()->route('medical_equipment.index');

    }

    public function edit($id){
        $mt = MedicalEquipment::findOrFail($id);
//        dd($mt);
        return view('admin.content.medical_equipment.edit',compact('mt'));
    }
    public function update($id,Request $request)
    {

        $me = MedicalEquipment::find($id);
        $me->countmt = $request->countmt;
        $me->namemo = $request->namemo;
        $me->region = $request->region;
        $me->namemt = $request->namemt;
        $me->raion = $request->raion;
        $me->save();
        return redirect()->route('medical_equipment.index');

    }

    public function delete($id)
    {
        $me = MedicalEquipment::find($id);
        $me->delete();
        return redirect()->route('medical_equipment.index');

    }

    public function search(Request $request)
    {
        $name_ru = "передвижной";
        $namemt = null;
        if($request->namemt == null){
            $mts = MedicalEquipment::orderBy('created_at', 'desc')->paginate(10);

        }else {
            $namemt = $request->namemt;
            $mts = MedicalEquipment::where('namemt', 'LIKE', '%' . $request->namemt . '%')
                ->paginate($request->perPage);
        }
        return view('admin.content.medical_equipment.index',compact('mts','namemt'));

    }
}
