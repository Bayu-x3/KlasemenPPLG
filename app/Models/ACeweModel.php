<?php

namespace App\Models;

use App\Models\KelasModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ACeweModel extends Model
{
    use HasFactory;

    protected $table = 'klasemen_acewe';
    protected $primaryKey = 'id';
    protected $fillable = ["gol", "kelas_id"];

    public function kelases()
    {
        return $this->belongsTo(KelasModel::class, 'kelas_id');
    }
}
