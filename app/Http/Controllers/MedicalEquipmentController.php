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
        $me = MedicalEquipment::all();
        foreach ($me as $m) {
            dd($m->namemo);
        }

        dd($me);
        return view('home');
    }

    public function create(){
        return view('medical_equipment.create');
    }

    public function store(Request $request)
    {
        $me = MedicalEquipment::create([
            'countmt' => '1',
            'namemo' => 'qwe',
            'sostoy' => 'Не работающеее',
            'datavv' => '01.06.2003',
            'region' => 'Акмолинская область',
            'raion' => 'qwe',
            'namemt' => 'qwe'
        ]);

        dd($me);
        return redirect()->route('medical_equipment.index');

    }

    public function edit($id){
        $me = MedicalEquipment::find($id);
        return view('medical_equipment.edit',compact('me'));
    }
    public function update(Request $request)
    {
        $id = '5fbf7bb9bee80b5051210752';
        $me = MedicalEquipment::find($id);
        $me->countmt = 2;
        $me->namemo = 'asd';
        $me->region = "asdasd1";
        $me->namemt = "zx";
        $me->save();
        dd($me->region);
        return redirect()->route('medical_equipment.index');

    }

    public function delete($id)
    {
        $me = MedicalEquipment::find($id);
        $me->delete();
        dd($me->region);
        return redirect()->route('medical_equipment.index');

    }

    public function search(Request $request)
    {
        $name_ru = "передвижной";
        $data = MedicalEquipment::where('namemt', 'LIKE', '%' . $name_ru . '%')
            ->get();

        dd($data);
        return response()->json(
            [
                'data'         => $data,
                'search_count' => $data->count(),
                'total'        => MedicalEquipment::query()->count(),
            ]
        );
    }
}
