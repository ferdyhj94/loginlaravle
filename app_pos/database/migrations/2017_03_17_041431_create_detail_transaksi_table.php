<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->increments('id_detail_trans');
            $table->integer('barang_id');
            $table->integer('qty');
            $table->integer('id_transaksi');
            $table->integer('harga');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::dropIfExists('detail_transaksi');
    }
}
