<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = ['quotation_id', 'date', 'amount','amount_text', 'advance','percentage','third_article','fifth_article'];

    public function quotation(){
        return $this->belongsTo('App\Models\Quotation');
    }

    public function fees(){
        return $this->hasMany('App\Models\Fee');
    }

    public function deliveries(){
        return $this->hasMany('App\Models\Delivery');
    }
}
