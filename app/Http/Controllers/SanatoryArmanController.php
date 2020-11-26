<?php

namespace App\Http\Controllers;

use App\SanatoryArman;
use Illuminate\Http\Request;

class SanatoryArmanController extends WebBaseController
{
    public function index(Request $request) {
        $text = $request->text;
        if($text) {
            $types = SanatoryArman::where('namekz', 'LIKE', '%' . $request->text . '%')
                ->orWhere('namerus', 'LIKE', '%' . $request->namerus . '%')
                ->paginate(10)
                ->appends(request()->query());
        }
        else {
            $types = SanatoryArman::paginate(10);
        }
        return view('admin.content.sanatory-arman.index',compact('types', 'text'));
    }

    public function create() {
        $type = new SanatoryArman();
        return view('admin.content.sanatory-arman.create',compact('type'));

    }

    public function store(Request $request) {
        SanatoryArman::create([
            'id' => $request->id,
            'namerus' => $request->namerus,
            'namekz' => $request->namekz,
            'tsena' => $request->tsena,
        ]);
        $this->added();
        return redirect()->route('sanatory.arman.index');

    }

    public function edit($id) {
        $type = SanatoryArman::find($id);
        return view('admin.content.sanatory-arman.edit',compact('type'));
    }

    public function update(Request $request, $id) {
        $type = SanatoryArman::find($id);
        $type->update([
            'id' => $request->id,
            'namerus' => $request->namerus,
            'namekz' => $request->namekz,
            'tsena' => $request->tsena,
        ]);
        $this->edited();

        return redirect()->route('sanatory.arman.index');

    }

    public function delete($id) {
        SanatoryArman::destroy($id);
        $this->deleted();
        return redirect()->route('sanatory.arman.index');

    }

}
