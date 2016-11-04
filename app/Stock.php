<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stocks';
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo('App\Product');


    }

    public function office()
    {
        return $this->belongsTo('App\Office');
    }

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
    protected $fillable = ['product_id', 'office_id', 'quantity', 'priority', 'forced', 'active'];


}
