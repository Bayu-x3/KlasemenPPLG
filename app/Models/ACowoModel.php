<?php

namespace App\Models;

use App\Models\KelasModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ACowoModel extends Model
{
    use HasFactory;
    protected $table = 'klasemen_acowo';
    protected $primaryKey = 'id';
    protected $fillable = ["gol", "kelases_id"];


public function kelases()
{
    return $this->belongsTo(KelasModel::class, 'kelas_id');
}
}