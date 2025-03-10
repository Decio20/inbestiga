<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'date', 'amount','expiration_date','discount','term', 'note'];

    public function customer(){
        return $this->belongsTo("App\Models\Customer");
    }

    public function details(){
        return $this->hasMany("App\Models\Detail");
    }

    public function order(){
        return $this->hasOne("App\Models\Order");
    }

    public function contract(){
        return $this->hasOne("App\Models\Contract");
    }
}
