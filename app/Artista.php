<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //Vincular modelo a tabla
    protected $table="artist";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "ArtistId";
    //Omitir campos de auditoria
    public $timestamps = false;
}
