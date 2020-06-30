<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->unsignedInteger('insts_id');
        $table->date('date');
        $table->time('start_time');
        $table->time('end_time');
        $table->string('dtls');
        $table->string('img');
        $table->integer('capacity')->default(1);
        $table->unsignedInteger('inst_users_id');
        $table->timestamps();
        $table->foreign('insts_id')
        ->references('id')
        ->on('insts');
        $table->foreign('inst_users_id')
        ->references('id')
        ->on('inst_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
