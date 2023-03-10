<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    use HasFactory;

    protected $table = "hospedajes";

    protected $fillable = ['id', 'fechainicio', 'fechasalida', 'idhabitacion', 'diashospedaje', 'idhuesped', 'estado'];
}
