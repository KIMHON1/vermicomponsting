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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("secondname");
            $table->string('email')->unique();
            $table->integer('phonenumber');
            $table->string("province");
            $table->string("district");
            $table->string("sector");
            $table->string("cell");
            $table->unsignedinteger('cooperative_id');
            $table->foreign("cooperative_id")->references('id')->on("cooperatives")->onDelete("cascade");

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
        Schema::dropIfExists('members');
    }
};
