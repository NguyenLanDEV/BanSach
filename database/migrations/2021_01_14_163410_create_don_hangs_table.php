<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DonHang', function (Blueprint $table) {
            $table->id();
            $table->integer('manND')->nullable(false);
            $table->integer('maNVK')->nullable(false);
            $table->integer('maQL')->nullable();
            $table->integer('maQTV')->nullable();
            $table->integer('tongTien');
            $table->string('tenKH');
            $table->string('diaChi');
            $table->string('sdt',10);
            $table->date('ngayDat');
            $table->date('ngayGiao');
            $table->integer('maTT')->nullable(false);
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
        Schema::dropIfExists('DonHang');
    }
}
