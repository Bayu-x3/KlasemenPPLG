<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopPutra extends Model
{
    use HasFactory;
    protected $table = 'topsputra';
    protected $primaryKey = 'id';
    protected $fillable = ["name", "gol"];
}
