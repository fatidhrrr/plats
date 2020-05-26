<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saveur extends Model
{
    public function plats(){
        return $this->hasMany('App\Plat', 'saveur_id');
    }
}
