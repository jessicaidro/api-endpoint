<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    use HasFactory;
    protected $fillable = {
        'marca', 'nome', 'modelo',
    }
}

//teste
