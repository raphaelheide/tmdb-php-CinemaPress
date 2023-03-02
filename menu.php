<?php
$input_line = $_SERVER['REQUEST_URI'];
$idiomaLAN = ('/' . $country . '/');
$idiomaBR = ('/br/');
$idiomaGB = ('/gb/');
$idiomaIT = ('/it/');
$idiomaUS = ('/us/');
$idiomaAR = ('/ar/');
$idiomaKO = ('/ko/');
?>

<?php echo '<a href="'. str_replace($idiomaLAN, $idiomaAR, $input_line) . '">Argentina </a>'; ?> | 
<?php echo '<a href="'. str_replace($idiomaLAN, $idiomaBR, $input_line) . '">Brasil </a>'; ?> | 
<?php echo '<a href="'. str_replace($idiomaLAN, $idiomaGB, $input_line) . '">England </a>'; ?> | 
<?php echo '<a href="'. str_replace($idiomaLAN, $idiomaIT, $input_line) . '">Italia </a>'; ?> | 
<?php echo '<a href="'. str_replace($idiomaLAN, $idiomaKO, $input_line) . '">한국 </a>'; ?> | 
<?php echo '<a href="'. str_replace($idiomaLAN, $idiomaUS, $input_line) . '">USA </a>'; ?> 

<br>
<?php echo '<strong>'. $countrylang . '</strong>'?>

