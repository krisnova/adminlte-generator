<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    protected $table = 'warehouses';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('werehouse_name', 'country', 'state', 'city', 'street', 'number', 'postal_code');
    protected $visible = array('werehouse_name', 'country', 'state', 'city', 'street', 'number', 'postal_code');

}
