<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Client; //Elquentエロクアント
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ
// use App\Models\Treatment;
use App\Models\Schedule;
use App\Models\Doctor;
use App\Models\Caremanager;

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

    $clients = Client::with('doctor','caremanager')->get();
    return view('admin.client.index',
    compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Doctor $doctor, Caremanager $caremanager)
    {
        $doctors  = Doctor::get();
        $caremanagers  = Caremanager::get();
        return view('admin.client.create',compact('doctors','caremanagers'));
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
            'treatment_title' => 'required',
            'treatment_content' => 'required',
            'treatment_point' => 'required',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.client.create')
                ->withInput()
                ->withErrors($validator);
        }


        $result = Client::create($request->all());

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
            'treatment_title' => 'required',
            'treatment_content' => 'required',
            'treatment_point' => 'required',
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
