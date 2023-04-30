<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Destination;
use App\Models\Risk;
use App\Models\Schedule;
use App\Models\Treatment;
use Illuminate\Support\Facades\Storage;


class DestinationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index($schedule_id)
    {
        $schedule = Schedule::findOrFail($schedule_id);
        $destinations = $schedule->destinations()->with('treatments')->get();

        return view(
            'admin.destination.index',
            compact('destinations')
        );
    }


    public function create(Schedule $schedule)
    {
        return view('admin.destination.create', compact('schedule'));
    }


    public function store(Request $request, Schedule $schedule)
    {
        $destination = new Destination;
        $destination->schedule_id = $schedule->id;
        $destination->content = $request->content;
        $destination->time = $request->time;
        $destination->address = $request->address;
        // $destination->url = $request->url;
        // $destination->risk_title1 = $request->risk_title1;
        // $destination->risk_content1 = $request->risk_content1;

        // if($request->hasFile('risk_img1')) {
        //     $img1 = $request->file('risk_img1');
        //     $path = $img1->store('risk_img1','public');
        //     $destination->risk_img1 = $path;
        // }
        // $destination->risk_title2 = $request->risk_title2;
        // $destination->risk_content2 = $request->risk_content2;
        // if($request->hasFile('risk_img2')) {
        //     $img2 = $request->file('risk_img2');
        //     $path = $img2->store('risk_img2','public');
        //     $destination->risk_img2 = $path;
        // }
        // $destination->risk_title3 = $request->risk_title3;
        // $destination->risk_content3 = $request->risk_content3;
        // if($request->hasFile('risk_img3')) {
        //     $img3 = $request->file('risk_img3');
        //     $path = $img3->store('risk_img3','public');
        //     $destination->risk_img3 = $path;
        // }
        $destination->save();

        // riskの登録
        $riskTitles = $request->input('risk_title');
        $riskContents = $request->input('risk_content');
        for ($i = 0; $i < count($riskTitles); $i++) {
            if (!empty($riskTitles) || !empty($riskContents)) {
                Risk::create([
                    'destination_id' => $destination->id,
                    'title' => $riskTitles[$i],
                    'content' => $riskContents[$i],
                ]);
            }
        }

        return redirect()->route('admin.destination.index', $schedule->id);
    }



    public function show($id)
    {

        $destination = Destination::find($id);
        $risks = Risk::where("destination_id", $id)->get();
        return view('admin.destination.show', compact('destination', 'risks'));
    }


    public function edit($id)
    {
        $destination = Destination::find($id);
        $risks = Risk::where("destination_id", $id)->get();
        //  dd($destination);
        return view('admin.destination.edit', compact('destination', 'risks'));
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
                ->route('admin.destination.edit', $id)
                ->withInput()
                ->withErrors($validator);
        }

        //データ更新処理
        $destination = Destination::find($id);
        $destination->content = $request->input('content');
        $destination->time = $request->input('time');
        $destination->address = $request->input('address');
        // $destination->url = $request->input('url');
        // $destination->risk_title1 = $request->input('risk_title1');
        // $destination->risk_content1 = $request->input('risk_content1');
        // $destination->risk_title2 = $request->input('risk_title2');
        // $destination->risk_content2 = $request->input('risk_content2');
        // $destination->risk_title3 = $request->input('risk_title3');
        // $destination->risk_content3 = $request->input('risk_content3');
        $destination->save();



        // 一旦全部消して登録し直す。
        Risk::where("destination_id", $destination->id)->delete();


        $riskTitles = $request->input('risk_title');
        $riskContents = $request->input('risk_content');
        for ($i = 0; $i < count($riskTitles); $i++) {
            if (!empty($riskTitles) || !empty($riskContents)) {
                Risk::create([
                    'destination_id' => $destination->id,
                    'title' => $riskTitles[$i],
                    'content' => $riskContents[$i],
                ]);
            }
        }

        //画像更新処理
        // if ($request->hasFile('risk_img1')) {
        //     $old_path = $destination->risk_img1;
        //     if ($old_path) {
        //         // 古い画像がある場合は削除する
        //         Storage::disk('public')->delete($old_path);
        //     }
        //     // 新しい画像を保存する
        //     $path = $request->file('risk_img1')->store('risk_img1', 'public');
        //     $destination->risk_img1 = $path;
        //     $destination->save();
        // }

        // if ($request->hasFile('risk_img2')) {
        //     $old_path = $destination->risk_img2;
        //     if ($old_path) {
        //         // 古い画像がある場合は削除する
        //         Storage::disk('public')->delete($old_path);
        //     }
        //     // 新しい画像を保存する
        //     $path = $request->file('risk_img2')->store('risk_img2', 'public');
        //     $destination->risk_img2 = $path;
        //     $destination->save();
        // }

        // if ($request->hasFile('risk_img3')) {
        //     $old_path = $destination->risk_img3;
        //     if ($old_path) {
        //         // 古い画像がある場合は削除する
        //         Storage::disk('public')->delete($old_path);
        //     }
        //     // 新しい画像を保存する
        //     $path = $request->file('risk_img3')->store('risk_img3', 'public');
        //     $destination->risk_img3 = $path;
        //     $destination->save();
        // }

        return redirect()->route('admin.destination.show', $destination->id);
    }


    public function destroy(string $id)
    {
        // 画像ファイルパスを取得
        $risk_img1_cur = $destination->risk_img1;

        // 登録されていれば削除
        if ($image_cur !== '' && !is_null($risk_img1_cur)) {
            Storage::disk('public')->delete($risk_img1_cur);
        }
        // 画像ファイルパスを取得
        $risk_img2_cur = $destination->risk_img2;

        // 登録されていれば削除
        if ($image_cur !== '' && !is_null($risk_img2_cur)) {
            Storage::disk('public')->delete($risk_img2_cur);
        }
        // 画像ファイルパスを取得
        $risk_img3_cur = $destination->risk_img3;

        // 登録されていれば削除
        if ($image_cur !== '' && !is_null($risk_img3_cur)) {
            Storage::disk('public')->delete($risk_img3_cur);
        }
        // 削除
        $post->delete();

        return redirect()->route('admin.schedule.index');
    }


    public function deleteimg(string $id,  string $img)
    {
    }
}
