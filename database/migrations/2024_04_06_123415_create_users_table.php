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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('login', 20)->unique();
            $table->string('password', 32);
            $table->string('image')->default('image.png');
            $table->softDeletes();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->index('gender_id', 'user_gender_index');
            $table->foreign('gender_id','user_gender_fk')->on('genders')->references('id');
        });
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
