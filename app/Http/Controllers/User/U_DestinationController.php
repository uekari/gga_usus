<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Destination; //Elquentエロクアント
use App\Models\Schedule;
use App\Models\Client;
use App\Models\Risk;
use App\Models\User;
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class U_DestinationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }



    public function show($id)//destinationのIDが入る
    {

        //whereHas() -> 対象のモデルに紐づく別のモデルに対して条件を付与して検索クエリを発行する
        //$destination という変数を定義します。
        //Destination モデルを使用して、指定された $id を持つデータベースから特定のレコードを取得します。
        //関連する Schedule モデルに、現在認証されているユーザーの ID と一致する user_id を持つレコードがあるかどうかに基づいて結果をフィルター処理する条件をクエリに追加します。
        //これは、関係に制約を追加できる whereHas メソッドに渡されるクロージャーを使用して行われます。
        //最後に、クエリを実行し、結果の Destination モデル インスタンスを返します。
        //全体として、このコードはデータベースから特定の Destination モデル レコードを取得していますが、それは現在認証されているユーザーに属する Schedule モデルに関連付けられている場合のみです。
        //     $destination = Destination::whereHas('schedule',function($query){
        //     $query -> where('user_id',Auth::user()->id);
        //    }) ->find($id);

        $risks = Risk::where("destination_id", $id)->get();
        

        //  dd($destination);
        return view('user.destination.show',
            compact('risks')
        );

    }


}
