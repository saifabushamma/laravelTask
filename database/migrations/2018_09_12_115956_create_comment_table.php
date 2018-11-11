<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment',function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('commentID');
            $table->text('comment');
            $table->string('deleted_at');
            $table->integer('users_id')->unsigned();
            $table->integer('items_itemID')->unsigned();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('items_itemID')->references('itemID')->on('items')
                ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
