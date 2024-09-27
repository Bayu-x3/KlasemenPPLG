<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopPutri extends Model
{
    use HasFactory;
    protected $table = 'topsputri';
    protected $primaryKey = 'id';
    protected $fillable = ["name", "gol"];
}
