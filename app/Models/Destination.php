<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;
use App\Models\Risk;
use App\Models\Treatment;

class Destination extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',

    ];

    protected $table = 'destinations';

    // protected $fillable = [
    //     'risk_img1',
    // ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }



    public function risks()
    {
        return $this->hasMany(Risk::class);
    }
    
   public function treatments() {
      return $this->belongsToMany(Treatment::class);
    }
}
