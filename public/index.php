<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\GradosController;
use Controllers\ProgramadoresController;
use Controllers\AplicacionController;
use Controllers\AsignarController;
use Controllers\TareasController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class,'index']);

$router->get('/aplicaciones', [AplicacionController::class,'index'] );
$router->post('/API/aplicaciones/guardar', [AplicacionController::class,'guardarAPI'] );
$router->post('/API/aplicaciones/modificar', [AplicacionController::class,'modificarAPI'] );
$router->post('/API/aplicaciones/eliminar', [AplicacionController::class,'eliminarAPI'] );
$router->get('/API/aplicaciones/buscar', [AplicacionController::class,'buscarAPI'] );

$router->get('/grados', [GradosController::class,'index'] );
$router->post('/API/grados/guardar', [GradosController::class,'guardarAPI'] );
$router->post('/API/grados/modificar', [GradosController::class,'modificarAPI'] );
$router->post('/API/grados/eliminar', [GradosController::class,'eliminarAPI'] );
$router->get('/API/grados/buscar', [GradosController::class,'buscarAPI'] );

$router->get('/programadores', [ProgramadoresController::class,'index'] );
$router->post('/API/programadores/guardar', [ProgramadoresController::class,'guardarAPI'] );
$router->post('/API/programadores/modificar', [ProgramadoresController::class,'modificarAPI'] );
$router->post('/API/programadores/eliminar', [ProgramadoresController::class,'eliminarAPI'] );
$router->get('/API/programadores/buscar', [ProgramadoresController::class,'buscarAPI'] );



$router->get('/tareas', [TareasController::class,'index'] );
$router->post('/API/tareas/guardar', [TareasController::class,'guardarAPI'] );
$router->post('/API/tareas/modificar', [TareasController::class,'modificarAPI'] );
$router->post('/API/tareas/eliminar', [TareasController::class,'eliminarAPI'] );
$router->get('/API/tareas/buscar', [TareasController::class,'buscarAPI'] );

$router->get('/asignar', [AsignarController::class,'index'] );
$router->post('/API/asignar/guardar', [AsignarController::class,'guardarAPI'] );
$router->post('/API/asignar/modificar', [AsignarController::class,'modificarAPI'] );
$router->post('/API/asignar/eliminar', [AsignarController::class,'eliminarAPI'] );
$router->get('/API/asignar/buscar', [AsignarController::class,'buscarAPI'] );
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
