<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class c_post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "c_post";
}
