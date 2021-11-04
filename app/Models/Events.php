<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model // Tu model se llama Events, no Evento
{
    use HasFactory;

 protected $table = 'events'; // Este es el nombre de la tabla con la que se conecta este modelo
  protected $fillable=[
      'name',
      'productor',
      'artista',
      'fecha_inicio',
      'fecha_fin',
      'status',
      'options',
      'info_requered',
      'event_id'
  ]; // Los datos aqui deben ser los mismos nombres que las columnas de la tabla con la que se conecta este modelo
}