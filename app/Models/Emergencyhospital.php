<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

class Emergencyhospital extends Model
{
    use HasFactory;

    protected $guarded = [
    'id',
    'created_at',
    'updated_at',
    ];

    // public static function getAllOrderByUpdated_at()
    // {

    //     return self::orderBy('updated_at', 'desc')->get();
    // }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }


}
