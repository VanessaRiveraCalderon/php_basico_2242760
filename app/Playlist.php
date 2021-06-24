<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    //Vincular modelo a tabla
    protected $table="playlist";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "PlaylistId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //Relacion MM (playlist y cancion)
    public function canciones(){
        //metodo: belongsToMany : Parametros
        //1. Modelo destino
        //2. Tabla Pivot
        //3. FK Tabla origen
        //4. FK Tabla destino
        return $this->belongsToMany('App\Cancion',
                                    'playlisttrack',
                                    'PlaylistId',
                                    'TrackId');
    }
}
