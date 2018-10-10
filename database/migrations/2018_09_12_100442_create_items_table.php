<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items',function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('itemID');
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('country');
            $table->string('image');
            $table->integer('users_id')->unsigned();
            $table->integer('category_categoryID')->unsigned();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('category_categoryID')->references('categoryID')->on('category')
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
        Schema::dropIfExists('items');
    }
}
