<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("class_id");
            $table->unsignedBigInteger("teacher_id");
            $table->string("type");
            $table->string("pass_mark");
            $table->string("final_mark");
            $table->string("subject_name");
            $table->string("subject_author")->nullable();
            $table->string("subject_code");
            $table->timestamps();

            $table->foreign("class_id")
                ->references("id")
                ->on("classes")
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign("teacher_id")
                ->references("id")
                ->on("teachers")
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
