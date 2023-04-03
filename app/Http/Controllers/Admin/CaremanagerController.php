<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Caremanager;
use Illuminate\Support\Facades\DB;

class CaremanagerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caremanagers = Caremanager::select('id','caremanager_name','belong','address', 'tel', 'fax' ,'created_at')->get();
        return view('admin.caremanager.index',
        compact('caremanagers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.caremanager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'caremanager_name' => 'required | max:191',
            'belong' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'fax' => 'required',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.caremanager.create')
                ->withInput()
                ->withErrors($validator);
        }
        // create()は最初から用意されている関数
        // 戻り値は挿入されたレコードの情報
        $result = Caremanager::create($request->all());
        // ルーティングにリクエスト送信（一覧ページに移動）
        return redirect()->route('admin.caremanager.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caremanager = Caremanager::find($id);
        return view('admin.caremanager.show', compact('caremanager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caremanager = Caremanager::find($id);
        return view('admin.caremanager.edit', compact('caremanager'));
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
        //バリデーション
        $validator = Validator::make($request->all(), [
            'caremanager_name' => 'required | max:191',
            'belong' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'fax' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.caremanager.edit', $id)
                ->withInput()
                ->withErrors($validator);
        }
        //データ更新処理
        $result = Caremanager::find($id)->update($request->all());
            return redirect()->route('admin.caremanager.index');
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
