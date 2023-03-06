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
class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'news_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    public function __construct()
    {
        return $this->news_images();
    }

    public function news_images()
    {
        return $this->hasMany('App\Models\NewsImages','news_id','news_id');
    }
    public function main_image()
    {
        return $this->belongsTo('App\Models\NewsImages','news_id','news_id')->where('is_main','1');
    }
}
