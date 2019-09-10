<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function index()
    {
        // throw new \Exception('Broken.');
        return view('example.index', ['title' => 'Example.']);
    }
}
