<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "usuario";

    public function posts()
    {
        return $this->hasMany(Post::class, 'usuario_id', 'id'); 
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'usuario_id', 'id'); 
    }

    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'usuario_id', 'id'); 
    }

    public function eventosCreados()
    {
        return $this->hasMany(Evento::class, 'usuario_id', 'id'); 
    }

    public function likes()
    {
        return $this->hasMany(Megusta::class, 'usuario_id', 'id'); 
    }


}