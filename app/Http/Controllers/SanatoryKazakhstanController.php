<?php

namespace App\Http\Controllers;

use App\SanatoryKazakhstan;
use Illuminate\Http\Request;

class SanatoryKazakhstanController extends WebBaseController
{
    public function index(Request $request) {
        $text = $request->text;
        if($text) {
            $types = SanatoryKazakhstan::where('namekz', 'LIKE', '%' . $request->text . '%')
                ->orWhere('namerus', 'LIKE', '%' . $request->namerus . '%')
                ->paginate(10)
                ->appends(request()->query());
        }
        else {
            $types = SanatoryKazakhstan::paginate(10);
        }
        return view('admin.content.sanatory-kazakhstan.index',compact('types', 'text'));
    }

    public function create() {
        $type = new SanatoryKazakhstan();
        return view('admin.content.sanatory-kazakhstan.create',compact('type'));

    }

    public function store(Request $request) {
        SanatoryKazakhstan::create([
            'id' => $request->id,
            'namerus' => $request->namerus,
            'namekz' => $request->namekz,
            'tsena' => $request->tsena,
        ]);
        $this->added();
        return redirect()->route('sanatory.kazakhstan.index');

    }

    public function edit($id) {
        $type = SanatoryKazakhstan::find($id);
        return view('admin.content.sanatory-kazakhstan.edit',compact('type'));
    }

    public function update(Request $request, $id) {
        $type = SanatoryKazakhstan::find($id);
        $type->update([
            'id' => $request->id,
            'namerus' => $request->namerus,
            'namekz' => $request->namekz,
            'tsena' => $request->tsena,
        ]);
        $this->edited();

        return redirect()->route('sanatory.kazakhstan.index');

    }

    public function delete($id) {
        SanatoryKazakhstan::destroy($id);
        $this->deleted();
        return redirect()->route('sanatory.kazakhstan.index');

    }
}
