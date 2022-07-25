<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('guardian_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_profession');
            $table->string('mother_profession');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('image');
            $table->string('user_name');
            $table->string('password');
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
        Schema::dropIfExists('parents');
    }
}
