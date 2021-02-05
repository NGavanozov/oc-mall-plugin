<?php


namespace OFFLINE\Mall\Classes\Traits;

use October\Rain\Support\Collection;
use OFFLINE\Mall\Models\ImageSet;
use System\Models\File;

trait Media
{
    /**
     * Returns the first available image.
     *
     * @return File
     */
    public function getMediaAttribute()
    {
        return optional($this->main_media_set_images)->first();
    }

    /**
     * Returns the first available image. Alias of get_image_attribute
     *
     * @return File
     */
    public function getMainMediaAttribute()
    {
        return $this->getMediaAttribute();
    }

    /**
     * Return all images except the main image.
     *
     * @return Collection
     */
    public function getMediasAttribute()
    {
        return optional($this->main_media_set_images)->slice(1);
    }

    /**
     * Returns all images of the main image set.
     */
    public function getMainMediaSetImagesAttribute()
    {
        return optional($this->main_media_set)->images;
    }

    /**
     * Return all available images.
     *
     * @return File
     */
    public function getAllImagesAttribute()
    {
        return $this->main_media_set_images;
    }

    /**
     * Returns the main image set.
     */
    public function getMainMediaSetAttribute()
    {
        if ( ! $this->media_sets) {
            return null;
        }

        return $this->media_sets instanceof ImageSet
            ? $this->media_sets
            : optional($this->media_sets->sortByDesc('is_main_set'))->first();
    }

}
