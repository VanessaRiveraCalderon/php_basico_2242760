<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Vincular modelo a tabla
    protected $table="Customer";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "CustomerId";
    //Omitir campos de auditoria
    public $timestamps = false;
}
