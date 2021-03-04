<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('availability');
            $table->text('description');
            $table->string('artists');
            $table->string('writers');
            $table->string('series');
            $table->float('price', 8, 2)->nullable();
            $table->date('sale_date');
            $table->integer('volume');
            $table->string('trim_size');
            $table->integer('page_count');
            $table->string('rated');
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
        Schema::dropIfExists('comics');
    }
}
