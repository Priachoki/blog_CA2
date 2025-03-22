<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mood_id'); // must match moods.id
            $table->string('song_title');
            $table->string('album');
            $table->string('spotify_link')->nullable();
            $table->text('spotify_embed')->nullable(); // longer text for iframe
            $table->timestamps();
        
            $table->foreign('mood_id')->references('id')->on('moods')->onDelete('cascade');
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
