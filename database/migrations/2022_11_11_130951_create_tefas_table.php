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
        Schema::create('tefas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('foto_produk');
            $table->string('nama_produk');
            $table->string('name_jurusan');
            $table->text('deskription');
            $table->boolean('status');
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
        Schema::dropIfExists('tefas');
    }
};
