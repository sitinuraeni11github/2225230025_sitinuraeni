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
        Schema::create('sitinuraeni11', function (Blueprint $table) {
            $table->string('nama');
            $table->string('email');
            $table->string('tanggallahir');
            $table->string('nim');
            $table->string('jurusan');
            $table->string('namaregu');
            $table->char('semester');
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
        Schema::dropIfExists('sitinuraeni11');
    }
};
