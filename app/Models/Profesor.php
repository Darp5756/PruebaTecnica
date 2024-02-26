<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profesor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'profesores';
    protected $primaryKey = 'id_profesor';
    protected $guarded = ['_token'];

    public function asignatura () : BelongsTo {
        return $this->belongsTo(Asinatura::class, 'id_asignatura');
    }
}
