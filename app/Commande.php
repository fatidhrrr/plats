<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function plat(){
        return $this->belongsTo('App\Plat', 'plat_id');
    }
}
