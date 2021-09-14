<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Komik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id');
            $table->string('judul');
            $table->string('slug');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('sampul');
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
        Schema::dropIfExists('komiks');
    }
}
