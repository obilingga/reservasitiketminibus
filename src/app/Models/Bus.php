<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $table = "tblbus";

    protected $fillable = ['kodekaryawan','kelas','nomorpol','driver','kapasitaspenumpang'];
}

