<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("designation");
            $table->string("dob");
            $table->string("gender")->nullable();
            $table->string("religion")->nullable();
            $table->string("email")->unique();
            $table->string("phone");
            $table->string("address")->nullable();
            $table->string("joining_date");
            $table->string("photo")->nullable();
            $table->string("user_name");
            $table->string("password")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
