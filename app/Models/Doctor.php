<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\User;

class Doctor extends Model
{
    use HasFactory;

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

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
