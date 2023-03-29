<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Time;
use App\Models\Schedule;
use App\Models\Treatment;
use InterventionImage;

class TimeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index($schedule_id)
    {
    // $time_treatment=Time::find(1)->treatments()->get();
    // dd($time_treatment);


        $schedule = Schedule::findOrFail($schedule_id);
        $times = $schedule -> times()->get();
        //    dd($times);

        // $times = Time::where('schedule_id',2)->get();
        // $times = Time::with('schedule:id,title')->get();

        // itemsテーブルのデータを全て取得
        // $times = Time::get();

        return view('admin.time.index',
        compact('times'));
    }


    public function create(Schedule $schedule)
    {
        return view('admin.time.create', compact('schedule'));
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
        // $time->risk_img1 = $request->risk_img1;
        $time->risk_title2 = $request->risk_title2;
        $time->risk_content2 = $request->risk_content2;
        // $time->risk_img2 = $request->risk_img2;
        $time->risk_title3 = $request->risk_title3;
        $time->risk_content3 = $request->risk_content3;
        // $time->risk_img3 = $request->risk_img3;
        $time->treatment_title1 = $request->treatment_title1;
        $time->treatment_title2 = $request->treatment_title2;
        $time->treatment_title3 = $request->treatment_title3;

        // dd($time);
        $time->save();

        return redirect()->route('admin.time.index',$schedule->id);
    }


    public function upload(Request $request)
    {
        // ディレクトリ名
        $dir = 'sample';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBに保存
        $image = new Image();
        $image->name = $file_name;
        $image->path = 'storage/' . $dir . '/' . $file_name;
        $image->save();

        return redirect('/');
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
