<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Time;
use App\Models\Schedule;
use App\Models\Treatment;
use Illuminate\Support\Facades\Storage;


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
        if($request->hasFile('risk_img1')) {
            $img1 = $request->file('risk_img1');
            $path = $img1->store('risk_img1','public');
            $time->risk_img1 = $path;
        }
        $time->risk_title2 = $request->risk_title2;
        $time->risk_content2 = $request->risk_content2;
        if($request->hasFile('risk_img2')) {
            $img2 = $request->file('risk_img2');
            $path = $img2->store('risk_img2','public');
            $time->risk_img2 = $path;
        }
        $time->risk_title3 = $request->risk_title3;
        $time->risk_content3 = $request->risk_content3;
        if($request->hasFile('risk_img3')) {
            $img3 = $request->file('risk_img3');
            $path = $img3->store('risk_img3','public');
            $time->risk_img3 = $path;
        }


        // dd($time);


        $time->save();

        return redirect()->route('admin.time.index',$schedule -> id);
    }

    // public function store(Request $request, Schedule $schedule)
    // {
    //     $time = new Time;
    //     $time->schedule_id = $schedule -> id;
    //     $time->time = $request->time;
    //     $time->content = $request->content;
    //     $time->is_move = $request->is_move;
    //     $time->risk_title1 = $request->risk_title1;
    //     $time->risk_content1 = $request->risk_content1;

    //     // ディレクトリ名
    //     $dir = 'ususimg';
    //     // アップロードされたファイル名を取得
    //     $file_name = $request->file('risk_img1');
    //     // 取得したファイル名で保存
    //     $request->file('risk_img1')->storeAs('public/' . $dir, $file_name);
    //     // ファイル情報をDBに保存
    //     $path = 'storage/' . $dir . '/' . $file_name;
    //     $time->risk_img1 = $path;

    //     $time->risk_title2 = $request->risk_title2;
    //     $time->risk_content2 = $request->risk_content2;
    //     $file_name = $request->file('risk_img2');
    //     $request->file('risk_img2')->storeAs('public/' . $dir, $file_name);
    //     $path = 'storage/' . $dir . '/' . $file_name;
    //     $time->risk_img2 = $path;

    //     $time->risk_title3 = $request->risk_title3;
    //     $time->risk_content3 = $request->risk_content3;
    //     $file_name = $request->file('risk_img3');
    //     $request->file('risk_img3')->storeAs('public/' . $dir, $file_name);
    //     $path = 'storage/' . $dir . '/' . $file_name;
    //     $time->risk_img3 = $path;


        // dd($time);


    //     $time->save();

    //     return redirect()->route('admin.time.index',$schedule -> id);
    // }


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

        //バリデーション
        $validator = Validator::make($request->all(), [
            'content' => 'required|max:255',
            'time' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.time.edit', $id)
                ->withInput()
                ->withErrors($validator);
        }

        //データ更新処理
        $time = Time::find($id);
        $time->content = $request->input('content');
        $time->time = $request->input('time');
        $time->is_move = $request->input('is_move');
        $time->risk_title1 = $request->input('risk_title1');
        $time->risk_content1 = $request->input('risk_content1');
        $time->risk_title2 = $request->input('risk_title2');
        $time->risk_content2 = $request->input('risk_content2');
        $time->risk_title3 = $request->input('risk_title3');
        $time->risk_content3 = $request->input('risk_content3');
        $time->save();

        //画像更新処理
        if ($request->hasFile('risk_img1')) {
            $old_path = $time->risk_img1;
            if ($old_path) {
                // 古い画像がある場合は削除する
                Storage::disk('public')->delete($old_path);
            }
            // 新しい画像を保存する
            $path = $request->file('risk_img1')->store('risk_img1', 'public');
            $time->risk_img1 = $path;
            $time->save();
        }

        if ($request->hasFile('risk_img2')) {
            $old_path = $time->risk_img2;
            if ($old_path) {
                // 古い画像がある場合は削除する
                Storage::disk('public')->delete($old_path);
            }
            // 新しい画像を保存する
            $path = $request->file('risk_img2')->store('risk_img2', 'public');
            $time->risk_img2 = $path;
            $time->save();
        }

        if ($request->hasFile('risk_img3')) {
            $old_path = $time->risk_img3;
            if ($old_path) {
                // 古い画像がある場合は削除する
                Storage::disk('public')->delete($old_path);
            }
            // 新しい画像を保存する
            $path = $request->file('risk_img3')->store('risk_img3', 'public');
            $time->risk_img3 = $path;
            $time->save();
        }

        return redirect()->route('admin.time.show', $time->id);
    }


    public function destroy(string $id)
    {
        // 画像ファイルパスを取得
        $risk_img1_cur = $time->risk_img1;

        // 登録されていれば削除
        if ($image_cur !== '' && !is_null($risk_img1_cur)) {
            Storage::disk('public')->delete($risk_img1_cur);
        }
        // 削除
        $post->delete();

        return redirect()->route('admin.schedule.index');
    }

}
