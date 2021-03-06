<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Betters extends Model
{
    public $fillable = ['name', 'surname', 'bet', 'horse_id'];

    public function horse()
    {
        return $this->belongsTo('App\Horses');
    }
}
