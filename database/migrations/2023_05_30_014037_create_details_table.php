<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle'); // assumes: add it as the "It Really Counts" as the example given
            $table->integer('like_count'); // assumes: to create the highlight book
            $table->longText('description');
            $table->string('author');
            $table->date('post_date');
            $table->foreignId('reading_time_id')->references('id')->on('reading_times')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('post_body');
            $table->string('post_image'); // assumes: adding images for the blog's cover (using faker images)
            // $table->string('post_video'); // assumes: video will be a static form, so no database needed 
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
        Schema::dropIfExists('details');
    }
};
