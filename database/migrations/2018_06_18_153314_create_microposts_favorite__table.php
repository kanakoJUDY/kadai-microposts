<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMicropostsFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microposts_favorite', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('user_id')->unsigned()->index();
             $table->integer('micropost_id')->unsigned()->index(); 
             
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
             $table->foreign('micropost_id')->references('id')->on('microposts')->onDelete('cascade'); 
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
        Schema::dropIfExists('microposts_favorite');
    }
}
