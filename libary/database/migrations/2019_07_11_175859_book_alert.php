<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookAlert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('BookAlert', function (Blueprint $table) {
            $table->bigIncrements('BookAlert_id');
            $table->integer('BookAlert_User_id');
            $table->enum('BookAlert_status',["1","2","0"]);
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
         Schema::dropIfExists('BookAlert');
    }
}
