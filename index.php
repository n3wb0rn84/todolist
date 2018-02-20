<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>To do list</title>
</head>

<body>
  <div class="contenu">
    <?php
      include "contenu.php";
    ?>
  </div>
  <div class="formulaire">
    <form class="Ajouts" action="index.php" method="post">
      <h2>Ajouter une tâche</h2>
      <caption>La tâche à effectuer</caption>
      <textarea name="textArea" rows="4" cols="40" placeholder="Add Task Here"></textarea>
      <button type="submit" name="button">Ajouter</button>
    </form>
    <?php include "formulaire.php";?>
  </div>
</body>

</html>
