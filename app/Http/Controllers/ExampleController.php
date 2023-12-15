<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;

class ExampleController extends Controller
{
    public function index()
    {
        return view('example');
    }

    public function example()
    {
        $examples = Example::all();
        // $examples = Example::find(1);
        // $examples = Example::where('id', 1);
        // $examples = Example::whereIn('id', [1, 2])->get();

        return view('example', ['examples' => $examples]);
    }
}
