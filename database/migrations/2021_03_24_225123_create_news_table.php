<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'news',
            function (Blueprint $table) {
                $table->id();
                $table->uuid('uuid');

                $table->string('title');
                $table->string('link');
                $table->longText('summary');
                $table->longText('content');
                $table->string('is_homepage')->nullable()->default(false);

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
        Schema::dropIfExists('news');
    }
}
