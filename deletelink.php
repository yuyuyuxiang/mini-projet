<?php
$css = $_GET['css'];
header("Content-type:text/html;charset=utf-8");
$servername = "localhost:8889";//MySQL默认为localhost，端口号3306
$username = "root";
$password = "root";
$dbname = "mini-projet";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
//Delete this line
$commentaire = $_GET['commentaire'];
$sql = "DELETE FROM Links WHERE commentaire = '{$commentaire}'";
$result = $conn->query($sql);

$conn->close();

echo '<form name="f" action="index.php" method="GET">
        <input name="css" type="hidden" value="'.$css.'">
        <input name="page" type="hidden" value="liens.php">
        <input name="titre" type="hidden" value="Liens"> 
      </form>';
?>
<script type="text/JavaScript">
    document.f.submit ();
</script>