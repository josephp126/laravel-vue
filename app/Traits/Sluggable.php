<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Sluggable
{
    public $slugColumn = 'name';

    public function generateSlug($model, $column_name_to_slug = null)
    {
        return $model->slug = $this->convertToSlug($model[$column_name_to_slug ?? $this->slugColumn]);
    }

    public function convertToSlug($name)
    {
        return Str::slug($name);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        // Make sure slug does not already have a value.
        if (!$this->slug) {
            $this->attributes['slug'] = $this->convertToSlug($name);
        }
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;

        // Make sure slug does not already have a value.
        if (!$this->slug) {
            $this->attributes['slug'] = $this->convertToSlug($title);
        }
    }
}
