<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
        $table->increments('id');
        $table->string('firstname');
        $table->string('lastname');
        $table->string('pw');
        $table->string('email')->unique();
        $table->unsignedInteger('nations_id');
        $table->string('year');
        $table->integer('life')->default(1);
        $table->foreign('nations_id')
        ->references('id')
        ->on('nations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
