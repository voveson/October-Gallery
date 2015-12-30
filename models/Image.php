<?php namespace AspenDigital\ImageGallery\Models;

use Model;

/**
 * Image Model
 */
class Image extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'aspendigital_imagegallery_images';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $attachOne = [
        'file' => 'System\Models\File'
    ];

    /**
     * @var array Relations
     */

    public $belongsTo = [
        'gallery'   =>  'AspenDigital\ImageGallery\Models\Gallery'
    ];

    /*
    public $hasOne = [];
    public $hasMany = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachMany = [];


    public function getThumbAttribute()
    {
        $img = Image::find($this->id);

        return '<img src="' . $img->file->getThumb(100,100,'crop') . '"/>';
    }*/
}