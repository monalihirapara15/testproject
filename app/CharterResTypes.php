<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharterResTypes extends Model
{
    public $table = "charter_res_types";

    protected $fillable = [
         'type_id',
         'type_desc',
         'sort',
    ];

    public function charterResource()
    {
        return $this->hasMany('App\CharterResources', 'type_id');

    }

    public static function getCategory()
    {

        /* $result = DB::table('charter_res_types')
                ->join('charter_resources', 'charter_res_types.id', '=', 'charter_resources.type_id')
                ->get();*/

        /*$result = DB::table('charter_res_types')
                with(array('charter_resources'=>function($query){
                    $query->select('res_id','res_desc','capacity','timestamp','trip_duration');
                }))
                ->get();*/
        /*$result = self::with(array('charterResource'=>function($query){
            $query->select('res_id','res_desc','capacity','timestamp','trip_duration');
          }))
        ->get();*/

        /*$result = self::select('charter_res_types.id')
                ->leftJoin('charter_resources as cs', 'charter_resources.type_id', '=', 'cs.id')
                ->get();*/

        /*echo "<pre>";print_r($result);exit();*/
    }
}
