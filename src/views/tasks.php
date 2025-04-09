<?php
 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List em PHP</title>
    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Tarefas em PHP</h1>
        <form class="row g-3 mb-4" method="post">
        <input type="hidden" name="action" value="add">
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Digite uma tarefa" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success">Adicionar</button>
            </div>
        </form>

    <!-- Lista de tarefas -->
     <ul class="list-group">
        <?php if(empty($tasks)): ?>
        <li class="list-group-item text-center text-mutted">
          Nenhuma tarefa adicionada
        </li>
        <?php else: ?>
          <?php foreach($tasks as $task):?>
            <li class="ist-group-item d-flex align-items-center 
            <?=$task['completed'] ?'text-decoration-line-through text-mutted':''?>">
            <form method="POST" class="me-3">
                  <input type="hidden" name="action" 
                  value="toggle">
                  <input type="hidden" 
                  name="id" 
                  value="<?= $task['id'] ?>">
                  <input type="checkbox" 
                  class="form-check-input" 
                  onchange="this.form.submit()" 
                  <?= $task['completed'] ? 'checked' : '' ?>>
            </form>
            <span>
              <?= htmlspecialchars($task['description']) ?>
            </span>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
     </ul>
    </div>
</body>
<!--  
<li class="list-group-item d-flex align-items-center">
          <form action="" class="me-3">
            <input type="hidden" name="action" value="toggle"/>
            <input type="hidden" name="id" value="id_do_item"/>
            <input type="checkbox" class="form-check-input"/>
          </form>
          <span>Tarefa pendente 0001</span>
        </li>

        <li class="list-group-item d-flex align-items-center">
          <form action="" class="me-3">
            <input type="hidden" name="action" value="toggle"/>
            <input type="hidden" name="id" value="id_do_item"/>
            <input type="checkbox" class="form-check-input"/>
          </form>
          <span>Tarefa pendente 0001</span>
        </li>
-->
</html>