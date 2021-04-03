<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'articles',
            function (Blueprint $table) {
                $table->id();
                $table->uuid('uuid');

                $table->string('link');
                $table->string('content');
                $table->string('title');
                $table->longText('summary');
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
        Schema::dropIfExists('articles');
    }
}
