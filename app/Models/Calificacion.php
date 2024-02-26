<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calificacion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'calificaciones';
    protected $primaryKey = 'id_calificacion';
    protected $guarded = ['_token'];

    public function alumno () : BelongsTo {
        return $this->belongsTo(Alumno::class, 'id_alumno');
    }

    public function asignatura () : BelongsTo {
        return $this->belongsTo(Asinatura::class, 'id_asignatura');
    }
}
