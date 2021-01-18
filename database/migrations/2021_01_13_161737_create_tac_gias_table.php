<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTacGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TacGia', function (Blueprint $table) {
            $table->id();
            $table->string('tenTG', 100)->nullable();
            $table->string('diaChi', 100)->nullable();
            $table->string('sdt', 10)->nullable();
            $table->text('gioiThieu')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tacGia');
    }
}
