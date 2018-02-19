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
 
