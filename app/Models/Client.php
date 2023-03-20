<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Treatment;
use App\Models\Schedule;

class Client extends Model
{
    use HasFactory;

  protected $guarded = [
    'id',
    'created_at',
    'updated_at',
  ];
    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }


}
