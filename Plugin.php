<?php namespace AspenDigital\ImageGallery;

use Backend;
use System\Classes\PluginBase;

/**
 * ImageGallery Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'          => 'ImageGallery',
            'description'   => 'A plugin for creating and managing image galleries',
            'author'        => 'Vince Oveson',
            'icon'          => 'icon-image',
            'homepage'      => 'http://www.aspendigital.com'
        ];
    }

    public function registerNavigation()
    {
        return [
            'Galleries' =>  [
                'label' =>  'Galleries',
                'url'   =>  Backend::url('aspendigital/imagegallery/galleries'),
                'icon'  =>  'icon-image'
            ]
        ];
    }

}
