<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Destination;

class Treatment extends Model
{
    use HasFactory;
    protected $guarded = [
    'id',
    'created_at',
    'updated_at',

  ];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function destinations() {
      return $this->belongsToMany(Destination::class);
    }



}
