<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;

    //protected $fillable = ['nomdoc'];

    protected $guarded = [];

    protected $primaryKey = 'idpaciente';

    public function cita()
    {
        return $this->hasMany(Cita::class, 'id_paciente', 'idpaciente');
    }

    public function historiamedica()
    {
        return $this->hasOne(HistoriaMedica::class, 'id_paciente', 'idpaciente');
    }
}
