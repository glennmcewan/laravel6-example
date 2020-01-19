<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Measure;
use App\Models\ServingStyle;
use Illuminate\Http\Request;

class CheckinController extends Controller
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
        $checkins = Checkin::all();

        return view('checkin.index', ['checkins' => $checkins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'checkin.create',
            [
                'measures' => Measure::all(),
                'servingStyles' => ServingStyle::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'measure' => ['required', 'integer'],
                'serving_style' => ['required', 'integer'],
                'rating' => ['nullable', 'numeric'],
                'comment' => ['nullable', 'string', 'max:255'],
            ]
        );

        $checkin = new Checkin;

        $checkin->user()->associate(auth()->user()->id);
        $checkin->measure()->associate($validated['measure']);
        $checkin->servingStyle()->associate($validated['serving_style']);

        $checkin->comment = $validated['comment'];
        $checkin->rating = $validated['rating'];

        $checkin->save();

        return redirect()->route('checkin.index')->with('success', 'Checked in!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
