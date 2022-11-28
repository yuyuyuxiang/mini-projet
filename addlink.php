
<?php
$css = $_GET[css];
$lien=$_REQUEST[lien];
$commentaire=$_REQUEST[commentaire];
$fich="liens.php";
if (!file_exists ($fich)) {touch ($fich);} //si le fichier liens.txt n'existe pas il est créé
if ($f = fopen ( $fich, "a"))
{
    $test=@fopen ($lien, 'r');
    if ($test){
        //le lien est valide, on l'insère en fin de fichier
        $code='<li><a href="'.$lien.'"><b class="change-color">'.$commentaire.'</b> : '.$lien.'</a></li>';
        fputs ($f, $code);
    }
    else {
        //le lien n'est pas valide, on l'insère en fin de fichier
        $code='<li><b class="change-color">'.$commentaire.'</b> : '.$lien.'</li>';
        fputs ($f, $code);
    };
    fclose ($f);
};
echo '<form name="f" action="index.php" method="GET">
        <input name="css" type="hidden" value="'.$css.'">
        <input name="page" type="hidden" value="liens.php">
        <input name="titre" type="hidden" value="Les liens utiles"> 
      </form>';
?>
<script type="text/JavaScript">
    document.f.submit ();
</script>