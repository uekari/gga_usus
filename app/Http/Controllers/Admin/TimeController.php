<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Time;
use App\Models\Schedule;
use App\Models\Treatment;


class TimeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($schedule_id)
    {
       $schedule = Schedule::findOrFail($schedule_id);
       $times = $schedule -> times()->with('treatments') ->get();

        return view('admin.time.index',
        compact('times'));
    }


    public function create(Schedule $schedule)
    {
        return view('admin.time.create',compact('schedule'));
    }


    public function store(Request $request, Schedule $schedule)
    {
        $time = new Time;
        $time->schedule_id = $schedule -> id;
        $time->time = $request->time;
        $time->content = $request->content;
        $time->is_move = $request->is_move;
        $time->risk_title1 = $request->risk_title1;
        $time->risk_content1 = $request->risk_content1;
        $img1 = $request->file('risk_img1');
        $path = $img1->store('img','public');
        $time->risk_img1 = $path;
        $time->risk_title2 = $request->risk_title2;
        $time->risk_content2 = $request->risk_content2;
        $img2 = $request->file('risk_img2');
        $path = $img2->store('img','public');
        $time->risk_img2 = $path;
        $time->risk_title3 = $request->risk_title3;
        $time->risk_content3 = $request->risk_content3;
        $img3 = $request->file('risk_img3');
        $path = $img3->store('img','public');
        $time->risk_img3 = $path;

        $time->treatment_title1 = $request->treatment_title1;
        $time->treatment_title2 = $request->treatment_title2;
        $time->treatment_title3 = $request->treatment_title3;

        // dd($time);


        $time->save();

        return redirect()->route('admin.time.index',$schedule -> id);
    }


    public function show($id)
    {

        $time = Time::find($id);
        return view('admin.time.show', compact('time'));
    }


    public function edit($id)
    {
     $time = Time::find($id);
    //  dd($time);
    return view('admin.time.edit', compact('time'));
    }


    public function update(Request $request,  $id)
    {
        //データ更新処理
        $result = Time::find($id)->update($request->all());
        return redirect()->route('admin.schedule.index');
    }


    public function destroy(string $id)
    {
        //
    }
}
