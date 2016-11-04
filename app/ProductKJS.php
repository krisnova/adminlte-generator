<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    public $timestamps = true;

    public function manufacturer()
    {
        return $this->belongsTo('Manufacturer');
    }

    public function observers()
    {
        return $this->hasMany('Observer');
    }

    public function notes()
    {
        return $this->morphMany('Note', 'notable');
    }

    public function stocks()
    {
        return $this->hasMany('Stock');
    }

}