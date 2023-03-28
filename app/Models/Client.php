<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Treatment;
use App\Models\Schedule;
use App\Models\Doctor;
use App\Models\Caremanager;
use App\Models\User;

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

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function caremanager()
    {
        return $this->belongsTo(Caremanager::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
