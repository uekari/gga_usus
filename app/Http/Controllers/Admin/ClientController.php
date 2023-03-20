<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Client; //Elquentエロクアント
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ
use App\Models\Treatment;
use App\Models\Schedule;

class ClientController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');





    }




    public function index()
    {
        // $e_all = Client::all();  //Elquentエロクアント
        // $q_get = DB::table('clients')->select('client_name')->get();//QueryBuilderクエリビルダ
        // $q_first = DB::table('clients')->select('client_name')->first();
        // $c_test = collect([
        // 'test' => 'test'
        //  ]);

        // var_dump($q_get);
        // dd($e_all, $q_get, $q_first, $c_test);


    // dd('testだー表示してーお願いー');

        $clients = Client::select('id','client_name','client_name2', 'desease','age', 'carelevel', 'created_at')->get();
        return view('admin.client.index',
        compact('clients'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.client.create');
    }


    public function store(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'client_name' => 'required | max:191',
            'client_name2' => 'required | max:191',
            'desease' => 'required',
            'age' => 'required | max:5',
            'carelevel' => 'required | max:5',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.client.create')
                ->withInput()
                ->withErrors($validator);
        }
        // create()は最初から用意されている関数
        // 戻り値は挿入されたレコードの情報
        $result = Client::create($request->all());
        // ルーティング「index」にリクエスト送信（一覧ページに移動）
        return redirect()->route('admin.client.index');
    }


    public function show($id)
    {
          $client = Client::find($id);
        return view('admin.client.show', compact('client'));
    }


    public function edit($id)
    {
      $client = Client::find($id);
        return view('admin.client.edit', compact('client'));
    }



    public function update(Request $request, $id)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'client_name' => 'required | max:191',
            'client_name2' => 'required | max:191',
            'desease' => 'required',
            'age' => 'required | max:5',
            'carelevel' => 'required | max:5',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.client.edit',$id)
                ->withInput()
                ->withErrors($validator);
        }
        //データ更新処理
        $result = Client::find($id)->update($request->all());
        return redirect()->route('admin.client.index');
    }


    public function destroy($id)
    {
        //
    }
}
