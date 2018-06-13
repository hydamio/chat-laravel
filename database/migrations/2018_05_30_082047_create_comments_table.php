<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_id'); //正の整数になるからunsigned
            $table->unsignedInteger('user_id');
            $table->string('body');
            $table->timestamps();
            $table
              ->foreign('room_id') //post_idは
              ->references('id') //主キー
              ->on('rooms') //postsテーブルの
              ->onDelete('cascade'); //postsテーブルの記事が削除された時にコメントも削除されるような仕組み。
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
