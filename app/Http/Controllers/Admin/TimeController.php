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
    // $time_treatment=Time::find(1)->treatments()->get();
    // dd($time_treatment);


        $schedule = Schedule::findOrFail($schedule_id);
        $times = $schedule -> times()->get();
        //    dd($times);

        // $times = Time::where('schedule_id',2)->get();
        // $times = Time::with('schedule:id,title')->get();

        // itemsテーブルのデータを全て取得
        $times = Time::get();

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
        $time->img_path = $request->img_path;
        $time->risk_title2 = $request->risk_title2;
        $time->risk_content2 = $request->risk_content2;
        // $time->risk_img2 = $request->risk_img2;
        $time->risk_title3 = $request->risk_title3;
        $time->risk_content3 = $request->risk_content3;
        // $time->risk_img3 = $request->risk_img3;

        // 画像の登録
        // 画像フォームでリクエストした画像を取得
        $img = request()->file('img_path'); //->getClientOriginalName(); //getClientOriginalName():画像につけている名前にする
        // 画像情報がセットされていれば、
        if (isset($img)) {
            // storage > public > img 配下に画像が保存される
            $path = $img->store('img','public');
            // store処理が実行できたら、
            if ($path) {
                // DBに登録する処理
                Item::create([
                    'img_path' => $path,
                ]);
            }
        }

        // $time->risk_img1 = $name1;
        // $time->risk_img2 = $name2;
        // $time->risk_img3 = $name3;

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
