<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('media_id')->unsigned();
            $table->foreign('media_id')->references('id')->on('medias')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('url');
            $table->string('url_image')->nullable();
            $table->integer('up_votes')->default(0);
            $table->integer('down_votes')->default(0);
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
        Schema::dropIfExists('contents');
    }
}
