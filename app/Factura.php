<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //Vincular modelo a tabla
    protected $table="invoice";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "InvoiceId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //Relacion M:M entre factura y canciones
    public function canciones(){
        //relacion mm: belongsToMany()
        //parametros: 1. Modelo a Relacionar
        //            2. La tabla pivote
        //            3. FK del presente modelo en la tabla pivote
        //            4. FK del modelo relacionado en la tabla pivote
        return $this->belongsToMany('App\Cancion',
                                    'invoiceline',
                                    'InvoiceId',
                                    'TrackId');
    }
}
