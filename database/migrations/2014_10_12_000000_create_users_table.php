<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'users',
            function (Blueprint $table) {
                $table->id();
                $table->uuid('uuid');

                $table->string('first_name');
                $table->string('last_name');
                $table->string('username');
                $table->string('password');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('date_joined');
                $table->string('guid')->nullable();
                $table->string('phone')->nullable();

                $table->json('notification_preferences')->nullable()->default('["mail"]');

                $table->boolean('is_contact')->nullable()->default(false);

                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
