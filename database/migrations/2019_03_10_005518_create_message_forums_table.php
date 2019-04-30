<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageForumsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_forums', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('sujet_forum_id')->unsigned()->nullable()->index();
            $table->foreign('sujet_forum_id')->references('id')->on('sujet_forums');  
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('message_forums');
    }
}
