<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColoumInLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('logs', function (Blueprint $table){
            $table->renameColumn('client_id', 'customer_id');
            $table->renameColumn('pinjam', 'pickup_time');
            $table->renameColumn('kembali', 'prom_return_time');
            $table->datetime('actual_return_time');
            $table->dropColumn('nim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logs', function (Blueprint $table){
            $table->renameColumn('customer_id', 'client_id');
            $table->renameColumn('pickup_time', 'pinjam');
            $table->renameColumn('prom_return_time', 'kembali');
            $table->dropColumn('actual_return_time');
            $table->integer('nim');
        });
    }
}
