<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkeberangkatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkeberangkatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("kodebus");
            $table->foreign("kodebus")->references("id")->on("tblbus");
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('kotatujuan',30);
            $table->string('kotaasal',30);
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
        Schema::dropIfExists('tblkeberangkatan');
    }
}
