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

        // dump($checkin = Checkin::first());
        // dump($checkin->user);
        // dump($checkin->measure);
        // dump($checkin->servingStyle);
        // exit;

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
        $data = $request->post();
        $data['user'] = auth()->user()->id;

        $checkin = new Checkin;

        $checkin->user_id = auth()->user()->id;
        $checkin->measure_id = $data['measure'];
        $checkin->serving_style_id = $data['serving_style'];
        $checkin->comment = $data['comment'];
        $checkin->rating = $data['rating'];

        $checkin->save();

        // dump($data);
        // exit;

        return redirect('checkin.index')->with('success', 'Checked in!');
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
