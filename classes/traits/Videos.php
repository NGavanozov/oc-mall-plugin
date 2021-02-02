<?php


namespace OFFLINE\Mall\Classes\Traits;

//use October\Rain\Support\Collection;
//use OFFLINE\Mall\Models\ImageSet;
//use System\Models\File;

trait Videos
{
    /**
     * Returns the first available video.
     *
     * @return File
     */
    public function getVideoAttribute()
    {
        return optional($this->main_image_set_videos)->first();
    }

    /**
     * Returns the first available video. Alias of get_video_attribute
     *
     * @return File
     */
    public function getMainVideoAttribute()
    {
        return $this->getVideoAttribute();
    }

    /**
     * Return all videos except the main video.
     *
     * @return Collection
     */
    public function getVideosAttribute()
    {
        return optional($this->main_image_set_videos)->slice(1);
    }

    /**
     * Returns all videos of the main image set.
     */
    public function getMainImageSetVideosAttribute()
    {
        return optional($this->main_image_set)->video;
    }

    /**
     * Return all available videos.
     *
     * @return File
     */
    public function getAllVideosAttribute()
    {
        return $this->main_image_set_videos;
    }

}
