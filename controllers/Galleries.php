<?php namespace AspenDigital\ImageGallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use AspenDigital\ImageGallery\Models\Gallery;

/**
 * Galleries Back-end Controller
 */
class Galleries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('AspenDigital.ImageGallery', 'imagegallery', 'galleries');
    }

    public function index()
    {
        $this->vars['galleriesTotal'] = Gallery::count();

        $this->asExtension('ListController')->index();
    }

    public function create()
    {
        $this->addCss('https://cdn.jsdelivr.net/jquery.ui/1.11.4/jquery-ui.min.css');
        $this->addCss('/plugins/aspendigital/imagegallery/assets/css/galleries.css');
        $this->addJs('https://cdn.jsdelivr.net/jquery.ui/1.11.4/jquery-ui.min.js');
        $this->addJs('/plugins/aspendigital/imagegallery/assets/js/edit-gallery.js');

        return $this->asExtension('FormController')->create();
    }

    public function update($recordId = null)
    {
        $this->addCss('https://cdn.jsdelivr.net/jquery.ui/1.11.4/jquery-ui.min.css');
        $this->addCss('/plugins/aspendigital/imagegallery/assets/css/galleries.css');
        $this->addJs('https://cdn.jsdelivr.net/jquery.ui/1.11.4/jquery-ui.min.js');
        $this->addJs('/plugins/aspendigital/imagegallery/assets/js/edit-gallery.js');

        return $this->asExtension('FormController')->update($recordId);
    }
}