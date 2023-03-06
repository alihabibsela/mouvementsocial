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
class MsValues extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ms_values';
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ms_values_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

}
