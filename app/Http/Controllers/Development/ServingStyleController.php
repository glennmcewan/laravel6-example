<?php

namespace App\Http\Controllers\Development;

use App\Models\ServingStyle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServingStyleController extends Controller
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
        $servingStyles = ServingStyle::all();

        return view('development.serving_style.index', ['servingStyles' => $servingStyles]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('development.serving_style.show');
    }
}
