<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $guarded = [];

    public function path(){
        return '/'.strtolower($this->type).'-properties/'.$this->id;
    }
}
