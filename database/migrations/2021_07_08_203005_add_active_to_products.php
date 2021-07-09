<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveToProducts extends Migration
{
    public function up()
    {
        Schema::table(
            'products',
            function (Blueprint $table) {
                $table->boolean('active')->nullable();
            }
        );
    }

    public function down()
    {
        Schema::table(
            'products',
            function (Blueprint $table) {
                $table->dropColumn('active');
            }
        );
    }
}
