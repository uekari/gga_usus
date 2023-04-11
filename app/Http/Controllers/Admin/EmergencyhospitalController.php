<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Schedule;
use App\Models\Emergencyhospital;
use Illuminate\Support\Facades\Storage;


class EmergencyhospitalController extends Controller
{

    public function index($schedule_id)
    {
       $schedule = Schedule::findOrFail($schedule_id);
        $hospitals = $schedule ->emergencyhospitals() ->get();
        // dd($hospitals);

        return view('admin.emergencyhospital.index',
        compact('hospitals'));;
    }


    public function create(Schedule $schedule)
    {
         return view('admin.emergencyhospital.create',compact('schedule'));
    }


    public function store(Request $request, Schedule $schedule)
    {
        $hospital = new Emergencyhospital;
        $hospital->schedule_id = $schedule -> id;
        $hospital->hospital = $request->hospital;
        $hospital->url = $request->url;
        $hospital->name = $request->name;
        $hospital->address = $request->address;
        $hospital->tel = $request->tel;
        $hospital->fax = $request->fax;
        // dd($hospital);
        $hospital->save();

        return redirect()->route('admin.emergencyhospital.index',$schedule->id);
    }


    public function show($id)
    {

    }


    public function edit(Schedule $schedule, $emergencyhospital)
    {
    $schedule = Schedule::select('id','title')->get();
    // dd($schedule);
    $hospital = Emergencyhospital::find($emergencyhospital);

         return view('admin.emergencyhospital.edit',compact('schedule','hospital'));
    }


    public function update(Request $request, Schedule $schedule, $emergencyhospital)
    {
        $hospital = Emergencyhospital::find($emergencyhospital);
        $hospital->schedule_id = $schedule -> id;
        $hospital->hospital = $request->hospital;
         $hospital->url = $request->url;
        $hospital->name = $request->name;
        $hospital->address = $request->address;
        $hospital->tel = $request->tel;
        $hospital->fax = $request->fax;
        // dd($hospital);
        $hospital->save();

         return redirect()->route('admin.emergencyhospital.index', $schedule->id);
    }


    public function destroy(Schedule $schedule, $emergencyhospital)
    {
        $result = Emergencyhospital::find($emergencyhospital)->delete();
        return redirect()->route('admin.emergencyhospital.index',$schedule->id);
    }

    // public function destroy($id)
    // {
    //   $result = Emergencyhospital::find($id)->delete();

    //   return redirect()->route('admin.schedule.index');
    // }
}
