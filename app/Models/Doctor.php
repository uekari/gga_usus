<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Doctor extends Model
{
    use HasFactory;

    // アプリケーション側から変更できないカラムを指定する「$guarded:ブラックリスト」
    // 対して「$fillable:ホワイトリスト」は、アプリケーション側から変更できるカラムを指定する
    // どちらか一方しか使えない
    protected $guarded = [
    'id',
    'created_at',
    'updated_at',
    ];

    public static function getAllOrderByUpdated_at()
    {
        // 更新日時が新しい順にソートしてデータを表示する関数
        // self = Hospitalモデル、orderBy() = SQLと同じものの理解でOK
        return self::orderBy('updated_at', 'desc')->get();
    }

    public function clients()
    {
       return $this->hasMany(Client::class);
    }



}
