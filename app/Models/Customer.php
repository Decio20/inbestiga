<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cell', 'university', 'career', 'status', 'email', 'dni','user_id','origin', 'address', 'time', 'needs','interest'];

    public function quotations(){
        return $this->hasMany("App\Models\Quotation");
    }

    public function project(){
        return $this->hasOne("App\Models\Project");
    }

    public function comunications(){
        return $this->hasMany("App\Models\Comunication");
    }

    public function origin(){
        return $this->hasOne("App\Models\Origin");
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function comissions(){
        return $this->hasMany("App\Models\Comission");
    }
}
