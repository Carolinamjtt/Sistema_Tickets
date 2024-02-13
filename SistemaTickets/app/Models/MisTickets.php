<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisTickets extends Model
{
    protected $fillable = ['autor', 'departamento', 'fecha', 'clasificacion', 'detalles', 'estatus'];
}
