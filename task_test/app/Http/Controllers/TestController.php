<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $values =  Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        dd($values,$count, $first);

        return view('tests.test',compact('values'));
    }
}

