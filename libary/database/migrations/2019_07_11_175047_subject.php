<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Subject', function (Blueprint $table) {
            $table->bigIncrements('Subject_id');
            $table->string('Subject_name');
            $table->integer('Subject_Class_name');
            $table->integer('Subject_Book_name');
            $table->enum('Book_status',["1","2","0"]);
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
        Schema::dropIfExists('Subject');
    }
}
