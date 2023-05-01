<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',

    ];

    public function images()
    {
        return $this->hasMany(RiskImage::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
