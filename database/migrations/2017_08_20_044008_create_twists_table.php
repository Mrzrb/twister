<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('body');
            $table->string('position');
            $table->integer('reply_num');
            $table->integer('like_num');
            $table->tinyinteger('is_retwist');
            $table->integer('retwist_id');
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
        Schema::dropIfExists('twists');
    }
}
