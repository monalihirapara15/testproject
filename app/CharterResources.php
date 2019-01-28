<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharterResources extends Model
{
    public $table = "charter_resources";

    protected $fillable = [
        'res_desc',
        'capacity',
        'type_id',
        'timestamp',
        'trip_duration'
    ];

    public function resourceType()
    {
        return $this->belongsTo('App\CharterResTypes', 'id');

    }

}
