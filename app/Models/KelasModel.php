<?php

namespace App\Models;

use App\Models\ACeweModel;
use App\Models\ACowoModel;
use App\Models\BCeweModel;
use App\Models\BCowoModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelasModel extends Model
{
    use HasFactory;
    protected $table = 'kelases';
    protected $primaryKey = 'id';
    // protected $fillable = ["nama_kelas", "kompetensi_keahlian"];

     public function aCewe()
    {
        return $this->hasMany(ACeweModel::class);
    }
     public function BCewe()
    {
        return $this->hasMany(BCeweModel::class);
    }
     public function aCowo()
    {
        return $this->hasMany(ACowoModel::class);
    }
    
     public function bCowo()
    {
        return $this->hasMany(BCowoModel::class);
    }
}
