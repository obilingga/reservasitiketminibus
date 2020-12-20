<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpelanggan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodepelanggan');
            $table->foreign('kodepelanggan')->references("id")->on("users");
            $table->string('noktp',20);
            $table->string('namapelanggan',100);
            $table->enum('jeniskelamin',['l','p']);
            $table->string('alamatpelanggan',100);
            $table->string('nomortelp',15);
            $table->string('email',100);
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
        Schema::dropIfExists('tblpelanggan');
    }
}
