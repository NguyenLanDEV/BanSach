<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->id();
            $table->string('tenSP');
            $table->double('gia')->default(0);
            $table->integer('soLuong')->default(0);
            $table->integer('maTG');
            $table->text('moTa')->nullable();
            $table->integer('soTrang')->default(0);
            $table->string('loaiBia')->nullable();
            $table->string('kichThuoc')->nullable();
            $table->string('canNang')->nullable();
            $table->string('ngonNgu')->nullable();
            $table->integer('NXB')->nullable();
            $table->string('dichGia')->nullable();
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
        Schema::dropIfExists('SanPham');
    }
}
