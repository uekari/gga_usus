<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Time; //Elquentエロクアント
use App\Models\Schedule;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class U_TimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }
    public function show($id)//timeのIDが入る
    {

        //whereHas() -> 対象のモデルに紐づく別のモデルに対して条件を付与して検索クエリを発行する
        //$time という変数を定義します。
        //Time モデルを使用して、指定された $id を持つデータベースから特定のレコードを取得します。
        //関連する Schedule モデルに、現在認証されているユーザーの ID と一致する user_id を持つレコードがあるかどうかに基づいて結果をフィルター処理する条件をクエリに追加します。
        //これは、関係に制約を追加できる whereHas メソッドに渡されるクロージャーを使用して行われます。
        //最後に、クエリを実行し、結果の Time モデル インスタンスを返します。
        //全体として、このコードはデータベースから特定の Time モデル レコードを取得していますが、それは現在認証されているユーザーに属する Schedule モデルに関連付けられている場合のみです。
       $time = Time::whereHas('schedule',function($query){
        $query -> where('user_id',Auth::user()->id);
       }) ->find($id);

    //  dd($time);
        return view('user.time.show',
        compact('time'));


    }


}
