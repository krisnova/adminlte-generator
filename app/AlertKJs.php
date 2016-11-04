<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{

    protected $table = 'alerts';
    public $timestamps = true;

    public function observer()
    {
        return $this->belongsTo('Observer');
    }

    public function channel()
    {
        return $this->belongsTo('Channel');
    }

}