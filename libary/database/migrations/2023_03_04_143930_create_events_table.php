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
            $table->integer('category_id')->unsigned();
            $table->integer('origination_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('gender')->nullable();
            $table->string('pic')->nullable();
            $table->enum('status',["0","1"])->default("0");
            $table->dateTime('Event_Date');
            $table->string('location')->nullable();
            $table->string('cost')->nullable();
            $table->longText('description')->nullable();
            // $table->string('title1')->nullable;
            //  $table->longText('description1')->nullable();
            //   $table->string('pic1')->nullable();
            //   $table->string('title2')->nullable;
            //   $table->longText('description2')->nullable();
            //    $table->string('pic2')->nullable();
            //    $table->string('title3')->nullable;
            //    $table->longText('description3')->nullable();
            //     $table->string('pic3')->nullable();
            //     $table->string('title4')->nullable;
            //     $table->longText('description4')->nullable();
            //      $table->string('pic4')->nullable();

            //      $table->string('title5')->nullable;
            //      $table->longText('description5')->nullable();
            //      $table->string('pic5')->nullable();
            $table->string('fb');
            $table->string('inst');
            $table->string('ln');
            $table->string('tw');
            $table->foreign('user_id')
                 ->references('id')
                 ->on('users')
                 ->onDelete('cascade');
            $table->foreign('origination_id')
                 ->references('id')
                 ->on('Origination')
                 ->onDelete('cascade');
            $table->foreign('category_id')
                 ->references('id')
                 ->on('categories')
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
        Schema::dropIfExists('events');
    }
}
