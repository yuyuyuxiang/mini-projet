<?php
header("Content-type:text/html;charset=utf-8");
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "mini-projet";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT lien, commentaire FROM Links";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $lien=array();
    $commentaire=array();
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
        $lien[]=$row['lien'];
        $commentaire[]=$row['commentaire'];
    }
} else {
    echo "0 结果";
}
$conn->close();
?>

<h1> Les liens </h1>
<div class="liens">
    <p> Soumettez vos liens !!!</p>
    <form name="form" id="form1" method="get" action="addlink.php">
        <label>lien</label>
        <input type="url" name="lien" value="http://"/>
        <label> commentaire du lien</label>
        <input type="text" name="commentaire" />
        <input type="hidden" name="css" value="<?php echo $css; ?>" />
        <input name="submit" value="soumettre" type="submit"/>
    </form>
</div>
<div class="scroll-box">
    <ul class="list">

    </ul>
</div>
<?php
for($i=0;$i<count($lien);$i++){
    $test=@fopen ($lien[$i], 'r');
    if ($test){
        //le lien est valide, on l'insère en fin de fichier
        $code='<li class="liens-li"><a href="'.$lien[$i].'"><b name="commentaire2" class="change-color">'.$commentaire[$i].'</b> : '.$lien[$i].'</a>
        <a href="deletelink.php?commentaire='.$commentaire[$i].'&css='.$css.'"><button type="submit">Supprimer</button></a></li><br>';
        echo $code;
    }
    else {
        //le lien n'est pas valide, on l'insère en fin de fichier
        $code='<li class="liens-li"><b name="commentaire2" class="change-color">'.$commentaire[$i].'</b> : '.$lien[$i].'
        <a href="deletelink.php?commentaire='.$commentaire[$i].'&css='.$css.'"><button>Supprimer</button></a></li><br>';
        echo $code;
    };
}
?>