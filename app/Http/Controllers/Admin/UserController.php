<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User; //Elquentエロクアント
use App\Models\Schedule;

class UserController extends Controller
{

    public function index()
    {
        $users = User::select('id','name','email','created_at')->get();
        // dd($users);
        return view('admin.user.index',compact('users'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {


    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }


    public function update(Request $request, string $id)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required | max:191',
            'email' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.user.edit', $id)
                ->withInput()
                ->withErrors($validator);
            }
        //データ更新処理
        $result = User::find($id)->update($request->all());
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
