<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    //protected $fillable = ['nomdoc'];

    protected $guarded = [];

    protected $primaryKey = 'iddoctor';

    public function cita()
    {
        return $this->hasMany(HistoriaMedicaCita::class, 'id_doctor', 'iddoctor');
    }
}
