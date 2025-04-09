<?php
 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);
// Inicia a sessão no navegador
session_start();
// Insira aqui os includes e/ou requires
require_once __DIR__ . '/../src/controllers/controller.php';
// Processa as requisições do navegador
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    handleRequest();
}
//exibir a lista de tarefas
showTasks();

?>