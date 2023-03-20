<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Time;
use App\Models\Schedule;

class TimeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        // 指定したカラムのみ取得（注意：IDは必ず含める）
        $times = Time::with('schedule:id,content')->get();
         dd($times);
        // return view('admin.time.index',
        // compact('times'));
    }


    public function create(Schedule $schedule)
    {
         return view('admin.time.create', compact('schedule'));
    }


    public function store(Request $request, Schedule $schedule)
    {
        $time = new Time;
        $time->schedule_id = $schedule -> id;
        $time->content = $request->content;
        $time->is_move = $request->is_move;
        // dd($time);
        $time->save();

        return redirect()->route('admin.time.index',$schedule->id);
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
