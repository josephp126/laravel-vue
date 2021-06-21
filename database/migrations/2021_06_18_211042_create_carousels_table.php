<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'carousels',
            function (Blueprint $table) {
                $table->id();

                $table->string('slug', 50)->nullable();
                $table->string('name', 50);
                $table->longText('settings')->nullable();

                $table->longText('height_sm')->nullable();
                $table->longText('height_md')->nullable();
                $table->longText('height_lg')->nullable();

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
        Schema::dropIfExists('carousels');
    }
}
