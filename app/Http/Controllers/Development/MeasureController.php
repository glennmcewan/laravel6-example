<?php

namespace App\Http\Controllers\Development;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Measure;

class MeasureController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $measures = Measure::all();

        return view('development.measure.index', ['measures' => $measures]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('development.measure.show');
    }
}
