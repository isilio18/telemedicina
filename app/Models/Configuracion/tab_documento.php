<?php

namespace gobela\Models\Configuracion;

use Illuminate\Database\Eloquent\Model;

class tab_documento extends Model
{
    //Nombre de la conexion que utitlizara este modelo
    protected $connection= 'principal';

    //Todos los modelos deben extender la clase Eloquent
    protected $table = 'configuracion.tab_documento';

}
