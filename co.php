<?php
$d = $_POST['us'];
$j = $_POST['mdp'];
$co = fopen('co.txt', 'r');
$monfichier = fopen('compteur.txt', 'r+');
$l = fgets($monfichier);
$y = $l + 1;
for ($i = 1; $i <= $l; $i++){
    $ligne = fgets($co);
	$a = $d." ".$j."
";
	if ($ligne == $a)
	{
		//echo "Connecter.<br/>".$d;
		$i = $y;
	}
	if ($i >= $l and $ligne != $a)
	{
		echo "Mots de passe faux.";
		echo '<a href="index.php">Retour</a>';
		goto a;
	}
}
fclose($co);
fclose($monfichier);
// code a taper apres la co

$monfichier2 = fopen('compteur2.txt', 'a+');
$pages_vues2 = fgets($monfichier2);
$chat = fopen("chat.txt", "r+");
for ($e = 1; $e <= $pages_vues2; $e++){
$p = fgets($chat);
echo '<br/>'.$p;
}
fseek($chat, 0);

echo '<form action="chats.php" method="post">
	Text:<input type="text" name="text"/>
	<input type="hidden" name="a" value="'.$d.'"/>
	<input type="hidden" name="b" value="'.$j.'"/>
	<input type="submit" value="Ok" />
</p>
</form>';
a:
exit
?>