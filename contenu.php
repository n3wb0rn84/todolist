<?php
  $task1 = file_get_contents('assets/JSON/todo.json',true);
  $taskArray1 = json_decode($task1);
  $todo1 = $taskArray1->todo;
  $done1 = $taskArray1->done;
    if (isset($_POST['checkbox'])){
      foreach ($_POST['checkbox'] as $value) {

        array_push($taskArray1->done, $taskArray1->todo[$value]);
        unset($taskArray1->todo[$value]);
      }
      $taskArray1->todo=array_values($taskArray1->todo);
      $Wallah=json_encode($taskArray1);
      file_put_contents('assets/JSON/todo.json',$Wallah);
      header('location:index.php');
    }
 ?>

<h2>A FAIRE</h2>
<form class="todo-list" action="index.php" method="post">
<ul>
  <?php
  foreach ($todo1 as $key=>$value){
  ?>
  <li><input type="checkbox" name="checkbox[]" value="<?=$key?>"><?=$value?></li>
<?php }?>
<button type="submit" name="button">Enregistrer</button>
</ul>
</form>
<h2>ARCHIVE</h2>
<ul>
  <?php
  foreach ($done1 as $key=>$value){
  ?>
  <li class="done"><input type="checkbox" name="checkboxed" value="<?=$key?>" checked="true"><?=$value?></li>
<?php }?>
</ul>
