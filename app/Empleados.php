<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //Vincular modelo a tabla
    protected $table="employee";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "EmployeeId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //Relacion 1 - M Cliente
    public function clientes(){
        return $this->hasMany('App\Customer', 'SupportRepId');
    }

    //Relacion 1 - M Facturas(a traves del cliente)
    public function facturas(){
        return $this->hasManyThrough('App\Factura',
                                     'App\Customer',
                                     'SupportRepId',
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId');
    }
}
