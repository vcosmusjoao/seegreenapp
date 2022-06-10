<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agricultor extends Model
{
   protected $table = 'agricultores';

    protected $fillable = ['nome', 'descricao','foto'];
}
