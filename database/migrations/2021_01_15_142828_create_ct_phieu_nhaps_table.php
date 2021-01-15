<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTPhieuNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CTPhieuNhap', function (Blueprint $table) {
            $table->id();
            $table->integer('maPN');
            $table->integer('maSP');
            $table->integer('maNCC');
            $table->integer('giaNhap');
            $table->integer('soLuong');
            $table->integer('tongTien');
            $table->text('ghiChu')->nullable();
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
        Schema::dropIfExists('CTPhieuNhap');
    }
}
