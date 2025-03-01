<?php namespace Mmatovski\Slider\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Sliders extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        'Backend\Behaviors\RelationController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Mmatovski.Slider', 'main-menu-item');
        $this->addJs("https://cdn.rawgit.com/RubaXa/Sortable/1.6.0/Sortable.min.js");
        $this->addJs("/plugins/kara5/slider/assets/js/app.js");
    }

    public function onReorder() {
        $records = \Request::input('rcd');
        $model = new \Mmatovski\Slider\Models\Slide;
        $model->setSortableOrder($records, range(1, count($records)));
    }
}
