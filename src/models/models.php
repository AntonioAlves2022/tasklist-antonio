<?php
    // Retorna as tarefas da sessão ou inicia um array vazio
    function getTasks(){
        // Digite o seu código aqui
        return $_SESSION['tasks'] ?? [];
    }

    // Adiciona uma nova task no array
    function addNewTask($description){
        // Seu código aqui
        $tasks = getTasks();
        $tasks[] = [
            'id' => count($tasks) + 1,
            'description' => $description,
            'completed' => false
        ];

        $_SESSION['tasks'] = $tasks;
    }

    // Marca uma task como concluida
    function toggleTask($id){
        // Seu código aqui
        $tasks = getTasks();
        foreach($tasks as $index => $task){
            if($task['id'] == $id){
                $tasks[$index]['completed'] = !$task['completed'];
                break;
            }
        }
        $_SESSION['tasks'] = $tasks;
    }
?>