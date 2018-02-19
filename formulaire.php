<?php
  $task = file_get_contents('assets/JSON/todo.json',true);
  $taskArray = json_decode($task);
  $taskToAdd = $_POST['textArea'] ?? '';
  if ($taskToAdd != '' && isset($taskToAdd)){
    array_push($taskArray->todo, $taskToAdd);
    $Wallah=json_encode($taskArray);
    file_put_contents('assets/JSON/todo.json',$Wallah);
    header('location:index.php');
  }
 ?>
 <form class="Ajouts" action="index.php" method="post">
   <h2>Ajouter une tâche</h2>
   <caption>La tâche à effectuer</caption>
   <textarea name="textArea" rows="4" cols="40" placeholder="Add Task Here"></textarea>
   <button type="submit" name="button">Ajouter</button>
 </form>
 <?php ?>
