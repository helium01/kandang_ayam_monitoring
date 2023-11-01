<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ayam extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal_masuk','jumlah_ayam'];
}
