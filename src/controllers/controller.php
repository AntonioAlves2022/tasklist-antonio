<?php
// Adicione aqui os includes e/ou requires
require_once __DIR__ . '/../models/models.php';
// Função que manipula as requsições do servidor
function handleRequest(){
    //Seu código aqui
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                if (!empty($_POST['description'])) {
                    addNewTask($_POST['description']);
                }
                break;
            case 'toggle':
                if (isset($_POST['id'])) {
                    toggleTask($_POST['id']);
                }
                break;
        }
    }
}

// Função que exibe as tasks na view
function showTasks(){
    // Seu código aqui
    $tasks = getTasks();
    require_once __DIR__ . '/../views/tasks.php';
}