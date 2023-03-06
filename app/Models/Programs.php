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
class Programs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'programs';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'programs_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';


    public function __construct()
    {
        return $this->program_images();
    }

    public function program_images()
    {
        return $this->hasMany('App\Models\ProgramImages','programs_id','programs_id');
    }
    public function programs_category()
    {
        return $this->belongsTo('App\Models\ProgramsCategory','programs_category_id','programs_category_id');
    }
    public function program_main_image()
    {
        return $this->belongsTo('App\Models\ProgramImages','programs_id','programs_id')->where('is_main','1');
    }
    public function programs_donors()
    {
        $ProgramsDonors=$this->hasMany('App\Models\ProgramsDonors','program_id','programs_id')
        ->join('donor', 'donor.donor_id', '=', 'programs_donors.donor_id');
        //->select('programs_donors.*', 'donor.image', 'donor.URL')
        //->orderBy('donor.orders', 'asc')->get();
        return $ProgramsDonors;
    }
}
