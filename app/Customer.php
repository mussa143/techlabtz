<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function invoice(){
        return $this::hasMany('\App\Invoice','invoice_id');
    }

    public function proforma(){
        return $this::hasMany('\App\proforma','proforma_id');
    }

    public function delivery(){
        return $this::hasMany('\App\Delivery','delivery_id');
    }
}
