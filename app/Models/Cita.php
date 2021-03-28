<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    //protected $fillable = ['nomdoc'];

    protected $guarded = [];

    protected $primaryKey = 'idcita';

    public function historiamedicacita()
    {
        return $this->hasMany(HistoriaMedicaCita::class, 'id_cita', 'idcita');
    }
}
