<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'delivery_note';

    public function invoice(){
        return $this::belongsTo('\App\proforma','delivery_id');
    }
}
