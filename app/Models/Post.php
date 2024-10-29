<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "post";

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'post_id', 'id'); 
    }

    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'p_evento', 'post_id', 'evento_id');
    }

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'p_grupo', 'post_id', 'grupo_id'); 
    }

    public function likes()
    {
        return $this->hasMany(Megusta::class, 'post_id', 'id');
    }
}