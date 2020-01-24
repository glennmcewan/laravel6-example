<?php

namespace App\Http\Controllers\Development;

use App\Http\Controllers\Controller;
use App\Models\ServingStyle;
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
}
