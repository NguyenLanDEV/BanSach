<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NguoiDung', function (Blueprint $table) {
            $table->id();
            $table->string('tenND');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('diaChi')->nullable();
            $table->string('sdt')->nullable();
            $table->boolean('gioiTinh');
            $table->date('ngaySinh');
            $table->boolean('active')->default(0);
            $table->integer('maLND')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('NguoiDung');
    }
}
