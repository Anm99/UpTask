<?php


namespace Model;

use Model\ActiveRecord;

class Proyecto extends ActiveRecord {
    protected static $tabla = 'proyectos';
    protected static $columnasDB = ['id', 'proyecto', 'url', 'propietarioid'];

    // Declarar Visibilidad
    public $id;
    public $proyecto;
    public $url;
    public $propietarioid;
   
   

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->proyecto = $args['proyecto'] ?? '';
        $this->url = $args['url'] ?? '';
        $this->propietarioid = $args['propietarioid'] ?? '';
    }

    public function validarProyecto() {
        if(!$this->proyecto) {
            self::$alertas['error'][] = 'El Nombre del Poyecto es Obligatorio';
        }

        return self::$alertas;
    }
}