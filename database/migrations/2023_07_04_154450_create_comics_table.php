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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title", 50);
            $table->text("description")->nullable();
            $table->text("thumb");
            $table->string("price");
            $table->string("series", 50);
            $table->date("sale_date");
            $table->string("type", 20);
            $table->text("artists")->nullable();
            $table->text("writers")->nullable();
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
};
