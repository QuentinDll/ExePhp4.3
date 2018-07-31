<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>
<body>
  <p>
    <?php
    $numb = 1;
       while ($numb < 10) {
         echo ($numb += $numb/2);
       }
    ?>
  </p>
</body>
</html>
