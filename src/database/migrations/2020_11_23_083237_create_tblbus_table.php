<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodekaryawan');
            $table->foreign('kodekaryawan')->references("id")->on("users");
            $table->enum('kelas',['ekslusif','vip','ekonomi']);
            $table->string('nomorpol',20);
            $table->string('driver',20);
            $table->string('kapasitaspenumpang',20);
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
        Schema::dropIfExists('tblbus');
    }
}
