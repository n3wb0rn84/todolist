 <?php
   $task1 = file_get_contents('assets/JSON/todo.json',true);
   $taskArray1 = json_decode($task1);
   $todo1 = $taskArray1->todo;
   $done1 = $taskArray1->done;
     if (isset($_POST['checkbox'])){
       foreach ($_POST['checkbox'] as $value) {
         array_push($taskArray1->done, $todo1[$value]);
         unset($taskArray1->todo[$value]);
         $Wallah=json_encode($taskArray1);
         file_put_contents('assets/JSON/todo.json',$Wallah);
         header('location: index.php');
       }
     }
  ?>

 <form class="" action="index.php" method="post">
 <h2>Ajouter une tâche</h2>
 <caption>La tâche à effectuer</caption>
 <textarea name="textArea" rows="4" cols="40" placeholder="Add Task Here"></textarea>
 <button type="submit" name="button">Ajouter</button>
 </form>
