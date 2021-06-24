<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artista extends Model
{
    //Vincular modelo a tabla
    protected $table="artist";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "ArtistId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //definir relacion artista 1 - M albums
    public function discos(){
        //hasmany: parametros
        //1. Modelo a relacionar
        //2. FK del modelo papa
        //3. PK del modelo hijo
        return $this->hasMany('App\Disco' , 'ArtistId');
    }
    //definir la relacion de multitabla entre
    //Artistas y sus canciones(tracks)
    public function canciones(){
        //hasManyThrough = Parametros
        //1. Modelo Nieto
        //2. Modelo Papa
        //3. FK del abuelo en el papa
        //4. FK del papa en el nieto
        //5. PK del Abuelo
        //6. PK del papa
        return $this->hasManyThrough('App\Cancion',
                                     'App\Disco',
                                     'ArtistId',
                                     'AlbumId',
                                     'ArtistId',
                                     'AlbumId');
    }
}
