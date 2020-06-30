<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inst_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('pw');
            $table->string('email')->unique();
            $table->string('j_title');
            $table->string('dept');
            $table->string('img')->nullable();
            $table->unsignedInteger('inst_id');
            $table->integer('life')->default(1);
            $table->timestamps();
            $table->foreign('inst_id')
                ->references('id')
                ->on('insts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inst_users');
    }
}
