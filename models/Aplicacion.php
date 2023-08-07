<?php

namespace Model;

class Aplicacion extends ActiveRecord{
    public static $tabla = 'aplicaciones';
    public static $columnasDB = ['aplicacion_nombre','aplicacion_estado'];
    public static $idTabla = 'aplicacion_id';

    public $aplicacion_id;
    public $aplicacion_nombre;
    public $aplicacion_estado;

    public function __construct($args = [] )
    {
        $this->aplicacion_id = $args['aplicacion_id'] ?? null;
        $this->aplicacion_nombre = $args['aplicacion_nombre'] ?? '';
        $this->aplicacion_estado = $args['aplicacion_estado'] ?? 1;
    }

}