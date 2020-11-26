<?php

namespace App\Http\Controllers;

use App\SanatoryArman;
use Illuminate\Http\Request;

class SanatoryArmanController extends WebBaseController
{
    public function index() {
        $types = SanatoryArman::paginate(10);
        return view('admin.content.sanatory-arman.index',compact('types'));

    }
}
