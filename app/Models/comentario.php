<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "comentario";

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id'); 
    }

    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'c_evento', 'comentario_id', 'evento_id');
    }

    public function lugares()
    {
        return $this->belongsToMany(Lugar::class, 'c_lugar', 'comentario_id', 'lugar_id');
    }
}