<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Time;
use App\Models\Schedule;
use App\Models\Treatment;

class TimeTreatmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($schedule_id, $destination_id)
    {


        $schedule=Schedule::findOrFail($schedule_id);
        $treatments = Treatment::where('client_id',$schedule->client_id)->get();
        $destination = Time::with('treatments')->findOrFail($destination_id);

        return view('admin.destinationtreatment.index',
        compact('schedule','treatments','time'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $schedule_id, $destination_id)
    {
        $destination = Time::findOrFail($destination_id);
        $destination->treatments()->sync($request -> treatment);
      return redirect()->route('admin.destination.index',[$destination->schedule_id, $destination->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
