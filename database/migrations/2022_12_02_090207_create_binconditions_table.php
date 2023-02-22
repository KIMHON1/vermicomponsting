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


        if(!Schema::hasTable('binconditions')){
        Schema::create('binconditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedinteger('bin_id');
            $table->integer("temperature");
            $table->string("humidity");
            $table->string("acidity");
            $table->timestamps();
            $table->foreign('bin_id')->references('id')->on('bins')->onDelete("cascade");
        });}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binconditions');
    }
};
