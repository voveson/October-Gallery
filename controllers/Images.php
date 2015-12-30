<?php namespace AspenDigital\ImageGallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Support\Facades\Input;

/**
 * Images Back-end Controller
 */
class Images extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('AspenDigital.ImageGallery', 'imagegallery', 'images');
    }

    public function create()
    {
        $this->addCss('/plugins/aspendigital/imagegallery/assets/css/images.css');

        return $this->asExtension('FormController')->create();
    }

    public function update($recordId = null)
    {
        $this->addCss('/plugins/aspendigital/imagegallery/assets/css/images.css');

        return $this->asExtension('FormController')->update($recordId);
    }
}