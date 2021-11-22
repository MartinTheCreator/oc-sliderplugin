<?php namespace Mmatovski\Slider\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mmatovski_slider_slider';

    public $belongsToMany = [
        'items' => [
            \Mmatovski\Slider\Models\Slide::class,
            'table' => 'mmatovski_slider_to_slide',
            'key' => 'slider_id',
            'otherKey' => 'slide_id'
        ]
    ];
}
