<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    use HasFactory;

    protected $table = "huespeds";

    protected $fillable = ['id', 'cihuesped', 'nombrecompleto', 'idciudad', 'telefono', 'profesion'];
}
