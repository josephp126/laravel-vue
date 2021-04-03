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

                $table->string('first_name');
                $table->string('last_name');
                $table->string('username');
                $table->string('password');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('is_active');
                $table->string('date_joined');
                $table->string('guid');
                $table->string('phone');

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
