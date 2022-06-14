<?php namespace Ceyleon\Dilantest\Models;

use Model;

/**
 * Model
 */
class Student extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ceyleon_dilantest_students';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
