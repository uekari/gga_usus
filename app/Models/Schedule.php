<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'schedule_name',
        'data',
        'created_at',
    ];

 public function user()
    {
        return $this->belongsTo(User::class);
    }
 public function client()
    {
        return $this->belongsTo(Client::class);
    }
}