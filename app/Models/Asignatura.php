<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'asignaturas';
    protected $primaryKey = 'id_asignatura';
    protected $guarded = ['_token'];
}
