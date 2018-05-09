<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayGroundOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('play_ground__owners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pg_id')->unsigned();
            $table->foreign('pg_id')->references('id')->on('play_grounds')->onDelete('cascade');
            $table->string('username');
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
        Schema::dropIfExists('play_ground__owners');
    }
}
