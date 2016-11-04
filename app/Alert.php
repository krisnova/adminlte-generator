<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
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
    protected $fillable = ['observer_id', 'channel_id', 'priority', 'active'];


}
