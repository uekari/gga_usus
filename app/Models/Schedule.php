<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\User;
use App\Models\Destination;
use App\Models\Emergencyhospital;


class Schedule extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

        public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
    public function Emergencyhospitals()
    {
        return $this->hasMany(Emergencyhospital::class);
    }
}
