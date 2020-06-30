<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuerysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('querys', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('events_id');
            $table->unsignedInteger('students_id');
            $table->unsignedInteger('terms_id');
            $table->string('dtls');
            $table->timestamps();
            
            $table->foreign('events_id')
                ->references('id')
                ->on('events');
            $table->foreign('students_id')
                ->references('id')
                ->on('students');
            $table->foreign('terms_id')
                ->references('id')
                ->on('terms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('querys');
    }
}
