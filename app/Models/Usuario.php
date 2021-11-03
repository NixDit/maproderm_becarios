<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table='usuarios';
    protected $fillable=['name',
    'apellidos',
    'email',
    'fecha_nacimiento',
    'whatsapp',
    'facebook',
    'instagram',
    'ciudad',
    'profesion',
    'comercializa',
    'info_requiere',
    'event_id'];
}
