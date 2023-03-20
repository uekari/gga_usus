<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

class Time extends Model
{
    use HasFactory;

   protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

 public function schedules()
    {
        return $this->belongsTo(Schedule::class);
    }

}
