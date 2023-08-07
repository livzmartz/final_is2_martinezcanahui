<?php

namespace Controllers;

use Exception;
use Model\Aplicacion;
use MVC\Router;

class AplicacionController{
    public static function index(Router $router){
        $aplicaciones = Aplicacion::all();
        // $aplicaciones2 = Producto::all();
        // var_dump($aplicaciones);
        // exit;
        $router->render('aplicaciones/index', [
           'aplicaciones' => $aplicaciones,
            // 'aplicaciones2' => $aplicaciones2,
        ]);

    }

    public static function guardarAPI(){
        try {
            $aplicacion = new Aplicacion($_POST);
            $resultado = $aplicacion->crear();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro guardado correctamente',
                    'codigo' => 1
                ]);
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function buscarAPI(){
        //$productos = Producto::all();
        $aplicacion_nombre = $_GET['aplicacion_nombre'];

        $sql = "SELECT * FROM aplicaciones where aplicacion_estado = 1 ";
        if($aplicacion_nombre != '') {
            $sql.= " and aplicacion_nombre like '%$aplicacion_nombre%' ";
        }
        try {
            
            $aplicaciones = Aplicacion::fetchArray($sql);
    
            echo json_encode($aplicaciones);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }
    public static function modificarAPI(){
        try {
            $aplicacion = new Aplicacion($_POST);
            $resultado = $aplicacion->actualizar();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro modificado correctamente',
                    'codigo' => 1
                ]);
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }



    public static function eliminarAPI(){
           
        try {
            $aplicacion_id = $_POST['aplicacion_id'];
            $aplicacion = Aplicacion::find($aplicacion_id);

            $aplicacion->aplicacion_estado = 0;
            $resultado = $aplicacion->actualizar();
    
            if ($resultado['resultado'] == 1 ){
                echo json_encode([
                    'mensaje' => 'Eliminado correctamente',
                    'codigo' => 1
                ]);
    
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error al eliminar el registro',
                    'codigo' => 0
                ]);
            }
            
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
}
}
}