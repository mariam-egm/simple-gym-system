<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'client_id', 'gym_id', 'name', 'price',
    ];
    
    protected $table = 'purchase_history';
    public $timestamps = false;

    public function setPurchaseDateAttribute($value) { 
        $this->attributes['purchase_date'] = \Carbon\Carbon::now(); 
    }

}