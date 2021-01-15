<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhMucSPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DanhMucSP', function (Blueprint $table) {
            $table->softDeletes();
            $table->id();
            $table->string('tenDM');
            $table->integer('maDM');
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
        Schema::table('DanhMucSP', function (Blueprint $table) {
            Schema::dropIfExists('DanhMucSP');
        });
    }
}
