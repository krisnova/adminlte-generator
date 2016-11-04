<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    protected $table = 'stocks';
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function office()
    {
        return $this->belongsTo('Office');
    }

}