<?php namespace AspenDigital\ImageGallery\Models;

use Model;

/**
 * Gallery Model
 */
class Gallery extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'aspendigital_imagegallery_galleries';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array The accessors to append to the model's array form.
     */
    protected $appends = ['image_count'];

    /**
     * @var array Relations
     */
    public $hasMany = [
        'images'    =>  [
            'AspenDigital\ImageGallery\Models\Image',
            'order' => 'display_order asc'
        ]
    ];

    public function getImageCountAttribute()
    {
        return count($this->images);
    }
}