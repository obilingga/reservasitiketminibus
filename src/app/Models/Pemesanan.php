<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = "tblpemesanan";

    protected $fillable = ['kodekaryawan','kodebus'];

 
}
