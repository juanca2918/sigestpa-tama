<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $fillable = ['nomdoc'];

    protected $guarded = [];

    protected $primaryKey = 'idtipodoc';

    public function personal()
    {
        return $this->hasMany(Personal::class, 'id_tipodocumento', 'idtipodoc');
    }

    public function paciente()
    {
        return $this->hasMany(Paciente::class, 'id_tipodocumento', 'idtipodoc');
    }
}
