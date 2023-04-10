<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $doctors = Doctor::orderBy('created_at', 'asc')->where(function ($query) {

            // 検索機能
            if ($search = request('search')) {
                $query->where('doctor_name', 'LIKE', "%{$search}%")->orWhere('belong','LIKE',"%{$search}%")->orWhere('address','LIKE',"%{$search}%");
            }

        })->get();
        return view('admin.doctor.index',
        compact('doctors'));
    }


    public function create()
    {
        return view('admin.doctor.create');
    }


    public function store(Request $request)
    {

        // バリデーション
        $validator = Validator::make($request->all(), [
            'doctor_name' => 'required | max:191',
            'belong' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'fax' => 'required',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.doctor.create')
                ->withInput()
                ->withErrors($validator);
        }
        // create()は最初から用意されている関数
        // 戻り値は挿入されたレコードの情報
        $result = Doctor::create($request->all());
        // ルーティングにリクエスト送信（一覧ページに移動）
        return redirect()->route('admin.doctor.index');
    }


    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.doctor.show', compact('doctor'));
    }


    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.doctor.edit', compact('doctor'));
    }


    public function update(Request $request, $id)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'doctor_name' => 'required | max:191',
            'belong' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'fax' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.doctor.edit', $id)
                ->withInput()
                ->withErrors($validator);
        }
        //データ更新処理
        $result = Doctor::find($id)->update($request->all());
            return redirect()->route('admin.doctor.index');
        }


    public function destroy($id)
    {
        //
    }
}
