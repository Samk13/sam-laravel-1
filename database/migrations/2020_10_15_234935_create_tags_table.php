<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // how to create the middle table :
        // you take the 2 tables connections, you make them singular, separate them by underscore and put them in alphabetic order
        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();
            // make sure the id for both tag and article are unique
            $table->unique(['article_id','tag_id']);
            // delete relation  data when deleting the article
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
