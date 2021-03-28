<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    use HasFactory;

    //protected $fillable = ['nomdoc'];

    protected $guarded = [];

    protected $primaryKey = 'idauxiliar';

    public function historiamedicacita()
    {
        return $this->hasMany(HistoriaMedicaCita::class, 'id_auxiliar', 'idauxiliar');
    }
}
