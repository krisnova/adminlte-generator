<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';
    public $timestamps = true;

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'manufacturer_id', 'gtin', 'repurchase_price', 'retail_price', 'weight', 'image'];


    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');

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
