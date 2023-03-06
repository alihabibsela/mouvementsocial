<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $questions_id
 * @property string $name
 * @property integer $orders
 * @property integer $dimension_id
 * @property int $is_mendatory
 * @property int $is_active
 * @property integer $type_id
 */
class Calls extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'calls';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'calls_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';


    public function __construct()
    {
        return $this->calls_docs();
    }

    // public function banner()
    // {
    //     return $this->belongsTo('App\Models\Banner','page_id','page_id');
    // }
    public function calls_docs()
    {
        return $this->hasMany('App\Models\CallsDocs','calls_id','calls_id')->where("is_active","1");
    }
}
