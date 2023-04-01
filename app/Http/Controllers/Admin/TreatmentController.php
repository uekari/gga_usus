<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Treatment; //Elquentエロクアント
use App\Models\Client;

class TreatmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function index($client_id)
    {
       $client = Client::findOrFail($client_id);
       $treatments = $client -> treatments()->get();
    //    dd($treatments);


        return view('admin.treatment.index',
        compact('treatments'));
    }



    public function create(Client $client)
    {

        return view('admin.treatment.create', compact('client'));
    }



    public function store(Request $request, Client $client)
    {


        // バリデーション
        $validator = Validator::make($request->all(), [
            'title' => 'required | max:191',
            'content' => 'required | max:191',
            'point' => 'required | max:191',

        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.treatment.create')
                ->withInput()
                ->withErrors($validator);
        }

        $treatment = new Treatment;

        $treatment-> client_id = $client -> id;
        $treatment->title = $request->title;
        $treatment->content = $request->content;
        $treatment->point = $request->point;
        $treatment->save();

        return redirect()->route('admin.treatment.index',$client->id);


        // // create()は最初から用意されている関数
        // // 戻り値は挿入されたレコードの情報
        // $result = Treatment::create($request->all());
        // // ルーティング「index」にリクエスト送信（一覧ページに移動）
        // return redirect()->route('admin.treatment.index');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
      $treatment = Treatmentent::find($id);
        return view('admin.treatment.edit', compact('treatment'));
    }


    public function update(Request $request, $id)
    {
      //データ更新処理
        $result = Treatmentent::find($id)->update($request->all());
            return redirect()->route('admin.treatment.index');
    }


    public function destroy($id)
    {
        //
    }
}
