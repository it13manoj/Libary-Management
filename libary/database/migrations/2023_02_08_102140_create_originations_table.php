<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOriginationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('originations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('contact');
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('pic')->nullable();
            $table->enum('status',["0","1"])->default("0");
            $table->longText('description');
            $table->string('fb');
            $table->string('inst');
            $table->string('ln');
            $table->string('tw');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                 ->references('id')
                 ->on('users')
                 ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('originations');
    }
}
