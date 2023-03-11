<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Client; //Elquentエロクアント
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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

        $clients = Client::select('client_name', 'desease','age', 'carelevel', 'created_at')->get();

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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
