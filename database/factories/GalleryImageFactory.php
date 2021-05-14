<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\Image;

class GalleryImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GalleryImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gallery_id' => Gallery::factory(),
            'image_id' => Image::factory(),
        ];
    }
}
