<?php
$year = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');
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
    foreach ($year as $months){
      echo'- '.$months.;
    }
    ?>
  </body>
  </html>
