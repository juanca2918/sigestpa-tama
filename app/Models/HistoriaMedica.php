<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaMedica extends Model
{
    use HasFactory;

    //protected $fillable = ['nomdoc'];

    protected $guarded = [];

    protected $primaryKey = 'idhistmed';

    public function historiamedicacita()
    {
        return $this->hasMany(HistoriaMedicaCita::class, 'id_histmed', 'idhistmed');
    }
}
