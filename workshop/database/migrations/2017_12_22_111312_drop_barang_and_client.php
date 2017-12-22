<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropBarangAndClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('barangs');
        Schema::dropIfExists('clients');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->integer('available');
            $table->integer('total');
            $table->integer('harga_jam');
            $table->integer('harga_hari');
            $table->string('meta', 500);
            $table->timestamps();
        });
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->integer('nim');
            $table->string('lembaga', 200);
            $table->integer('berhasil');
            $table->integer('gagal');
            $table->enum('status', ['clear', 'banned']);
            $table->timestamps();
        });
    }
}
