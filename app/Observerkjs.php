<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{

    protected $table = 'observers';
    public $timestamps = true;

    public function product()
    {
        return $this->hasOne('Product');
    }

    public function notes()
    {
        return $this->morphMany('Note', 'notable');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function alerts()
    {
        return $this->hasMany('Alert');
    }

}