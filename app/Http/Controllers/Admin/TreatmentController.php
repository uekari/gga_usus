<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Treatment; //Elquentエロクアント
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ
use App\Models\Client;

class TreatmentController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth:admin');

        // $client = Client::find(1);
        // $client->treatments;
        // foreach($client->treatments as $treatment){
        //      $treatment->content;
        // }
    }



    public function index()
    {
        // 指定したカラムのみ取得（注意：IDは必ず含める）
        $treatments = Treatment::with('client:id,client_name')->get();

        // return view('admin.treatment.index',
        // compact('treatments'));

    }


    public function create(Client $client)
    {
        return view('admin.treatment.create');
    }

    public function store(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'item' => 'required | max:191',
            'content' => 'required | max:191',
            'point' => 'required | max:191',
            'client_id' =>'required'

        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.treatment.create')
                ->withInput()
                ->withErrors($validator);
        }
        // create()は最初から用意されている関数
        // 戻り値は挿入されたレコードの情報
        $result = Treatment::create($request->all());
        // ルーティング「index」にリクエスト送信（一覧ページに移動）
        return redirect()->route('admin.treatment.index');
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

    }


    public function destroy($id)
    {
        //
    }
}
