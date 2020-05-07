<?php
$months = array ('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex3 partie3 php</title>
</head>
<body>
  <?php
  foreach ($months as $month){ //boucle foreach - months nom tableau et month variable (nommer comme on veut)
    ?>
    <p>- <?php echo $month; ?></p>
  <?php } ?>
</body>
</html>
