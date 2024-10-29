<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="evento";

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'asiste', 'evento_id', 'usuario_id'); 
    }

    public function creador()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }
}