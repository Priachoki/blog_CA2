<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoodsTable extends Migration
{
    public function up()
    {
        Schema::create('moods', function (Blueprint $table) {
            $table->id(); // this creates an unsignedBigInteger('id')
            $table->string('mood_name');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('moods');
    }
}

