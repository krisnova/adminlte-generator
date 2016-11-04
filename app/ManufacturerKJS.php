<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{

    protected $table = 'manufacturers';
    public $timestamps = true;

    public function products()
    {
        return $this->hasMany('Product');
    }

    public function notes()
    {
        return $this->morphMany('Note', 'notable');
    }

}

/*
php artisan crud:generate Alerts --fields="observer_id#integer; channel_id#integer; priority#smallint; active#boolean;" --view-path=warehouse --controller-namespace=Warehouse --route-group=warehouse

php artisan crud:generate Notes --fields="notable_id#integer; user_id#integer; notable_type#string; content#text; priority#smallint;  active#boolean;" --view-path=warehouse --controller-namespace=Warehouse --route-group=warehouse


*/


