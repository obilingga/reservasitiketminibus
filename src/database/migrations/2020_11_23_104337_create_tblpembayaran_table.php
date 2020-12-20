<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("kodepemesanan");
            $table->foreign("kodepemesanan")->references("id")->on("tblpemesanan");
            $table->date('tglpembayaran');
            $table->string('viapembayaran',30);
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
        Schema::dropIfExists('tblpembayaran');
    }
}
