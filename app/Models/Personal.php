<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    //protected $fillable = ['nomdoc'];

    protected $guarded = [];

    protected $primaryKey = 'idpersonal';

    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'id_personal', 'idpersonal');
    }

    public function auxiliar()
    {
        return $this->hasOne(Auxiliar::class, 'id_personal', 'idpersonal');
    }
}
