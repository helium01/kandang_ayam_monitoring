<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servo extends Model
{
    use HasFactory;
    protected $fillable = ['node1','node2'];
}
