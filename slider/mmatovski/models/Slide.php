<?php namespace Mmatovski\Slider\Models;

use Model;

/**
 * Model
 */
class Slide extends Model
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

    protected $jsonable = [
        'content'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mmatovski_slider_slide';

    public $belongsToMany = [
        'sliders' => [
            \Mmatovski\Slider\Models\Slider::class,
            'table' => 'mmatovski_slider_to_slide',
            'key' => 'slide_id',
            'otherKey' => 'slider_id'
        ]
    ];
}
