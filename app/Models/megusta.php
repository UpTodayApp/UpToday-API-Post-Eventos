<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Megusta extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "megusta";

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id'); 
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id'); 
    }

    public function comentario()
    {
        return $this->belongsTo(Comentario::class, 'comentario_id', 'id'); 
    }
}