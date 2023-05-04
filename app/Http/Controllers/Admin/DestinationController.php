<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Destination;
use App\Models\Risk;
use App\Models\RiskImage;
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
        $destinations = $schedule->destinations()->with('treatments')->orderBy('time', 'asc')->get();

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
        $destination->save();

        // riskの登録
        $riskTitles = $request->input('risk_title');
        $riskContents = $request->input('risk_content');

        for ($i = 0; $i < count($riskTitles); $i++) {
            if (!empty($riskTitles)) {
                $risk = Risk::create([
                    'destination_id' => $destination->id,
                    'title' => $riskTitles[$i],
                    'content' => $riskContents[$i],
                ]);
            }
            $risk_image = $request->file("risk" . $i + 1 . "_img");
            if (!empty($risk_image)) {
                for ($j = 0; $j < count($risk_image); $j++) {
                    //画像をストレージに保存
                    $path = $risk_image[$j]->store('risk_img', 'public');
                    // DBにpathを保存
                    RiskImage::create([
                        'risk_id' => $risk->id,
                        'img_path' => $path,
                    ]);
                }
            }
        }

        return redirect()->route('admin.destination.index', $schedule->id);
    }



    public function show($id)
    {

        $destination = Destination::find($id);
        $risks = Risk::where("destination_id", $id)->with("images")->get();
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
