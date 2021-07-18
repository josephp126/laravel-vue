<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsActiveToResources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'resources',
            function (Blueprint $table) {
                $table->uuid('uuid')->after('id');
                $table->string('mime_type')->after('user_id');
                $table->boolean('is_active')->after('resource_group_id');
                $table->string('hash', 50)->after('is_active');
                $table->unsignedBigInteger('resource_type_id')->nullable()->change();
                $table->unsignedBigInteger('resource_group_id')->nullable()->change();
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
        Schema::table(
            'resources',
            function (Blueprint $table) {
                $table->dropColumn('is_active');
                $table->dropColumn('hash');
                $table->dropColumn('uuid');
                $table->dropColumn('mime_type');
            }
        );
    }
}
