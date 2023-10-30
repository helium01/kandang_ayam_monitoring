<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saklar extends Model
{
    use HasFactory;
    protected $fillable = ['heater', 'waterpump', 'lampu'];
}
