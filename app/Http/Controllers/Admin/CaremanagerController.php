<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Caremanager;
use Illuminate\Support\Facades\DB;

class CaremanagerController extends Controller
{

    public function index()
    {
        $caremanagers = Caremanager::orderBy('created_at', 'asc')->where(function ($query) {

            // 検索機能
            if ($search = request('search')) {
                $query->where('caremanager_name', 'LIKE', "%{$search}%")->orWhere('belong','LIKE',"%{$search}%")->orWhere('address','LIKE',"%{$search}%");
            }

        })->get();
        return view('admin.caremanager.index',
        compact('caremanagers'));
    }


    public function create()
    {
        return view('admin.caremanager.create');
    }


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


    public function show($id)
    {
        $caremanager = Caremanager::find($id);
        return view('admin.caremanager.show', compact('caremanager'));
    }


    public function edit($id)
    {
        $caremanager = Caremanager::find($id);
        return view('admin.caremanager.edit', compact('caremanager'));
    }


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


    public function destroy($id)
    {
        //
    }
}
