<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("kodekaryawan");
            $table->foreign("kodekaryawan")->references("id")->on("tblkaryawan");
            $table->unsignedBigInteger("kodebus");
            $table->foreign("kodebus")->references("id")->on("tblbus");
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
        Schema::dropIfExists('tblpemesanan');
    }
}
