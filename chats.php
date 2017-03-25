<?php
$f = $_POST['text'];
$p = $_POST['a'];
$j = $_POST['b'];
$h = $p.": ".$f."
";
$chat = fopen("chat.txt", "a+");
$monfichier = fopen('compteur2.txt', 'r+');
$pages_vues = fgets($monfichier);
$pages_vues += 1;
fseek($monfichier, 0);
fputs($monfichier, $pages_vues);
if ($_POST['text'] != ""){
fputs($chat, $h);
}
fclose($chat);
echo "<form id='test' action='co.php' method='post'>
<input type='hidden' name='us' value='".$p."'/>
<input type='hidden' name='mdp' value='".$j."'/>
</form>
<script type='text/javascript'>
  document.getElementById('test').submit();
</script>";

?>