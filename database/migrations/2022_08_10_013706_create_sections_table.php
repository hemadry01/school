<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string("section_name");
            $table->string("category");
            $table->string("capacity");
            $table->unsignedBigInteger("class_id");
            $table->unsignedBigInteger("teacher_id");
            $table->string("note")->nullable();
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
        Schema::dropIfExists('sections');
    }
}
