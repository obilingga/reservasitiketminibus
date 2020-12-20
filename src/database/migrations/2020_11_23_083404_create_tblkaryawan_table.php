<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkaryawan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodekaryawan');
            $table->foreign('kodekaryawan')->references("id")->on("users");
            $table->string('namakaryawan',100);
            $table->enum('jeniskelamin',['l','p']);
            $table->string('alamatkaryawan',100);
            $table->string('nohp',15);
            $table->string('username',20);
            $table->string('password',20);
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
        Schema::dropIfExists('tblkaryawan');
    }
}
