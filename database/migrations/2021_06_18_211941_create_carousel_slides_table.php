<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'carousel_slides',
            function (Blueprint $table) {
                $table->id();
                $table->foreignId('carousel_id')->constrained();

                $table->foreignId('bg_default_image_id')->nullable();
                $table->foreignId('bg_md_image_id')->nullable();
                $table->foreignId('bg_sm_image_id')->nullable();

                $table->foreignId('fg_sm_image_id')->nullable();
                $table->foreignId('fg_md_image_id')->nullable();
                $table->foreignId('fg_lg_image_id')->nullable();

                $table->timestamps();
                $table->softDeletes();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carousel_slides');
    }
}
