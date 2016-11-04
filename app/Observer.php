<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
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
    protected $fillable = ['product_id', 'user_id', 'stock', 'active'];


}
