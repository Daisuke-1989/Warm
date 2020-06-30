<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('inst_name')->unique();
        $table->unsignedInteger('nations_id');
        $table->integer('life')->default(1);
        $table->timestamps();
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
        Schema::dropIfExists('insts');
    }
}
