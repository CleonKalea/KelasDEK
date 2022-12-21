<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    function index()
    {
        return view('/dokter-add', [
            "title"=>"Input"
        ]);
    }

}
