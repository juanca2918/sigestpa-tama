<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaMedicaCita extends Model
{
    use HasFactory;

    //protected $fillable = ['nomdoc'];

    protected $guarded = [];

    protected $primaryKey = 'idhistmedcita';
}
