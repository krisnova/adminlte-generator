<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{

    protected $table = 'offices';
    public $timestamps = true;

    public function products()
    {
        return $this->hasMany('Stock');
    }

}