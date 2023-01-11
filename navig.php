<?php
    echo '<p class="navig-ligne"><a class="change-color" href="index.php?page=home.php&css='.$css.'&titre=Introduction">Introduction</a></p>';
    echo '<p class="navig-ligne"><a class="change-color" href="index.php?page=gallery.php&css='.$css.'&titre=Gallery">Gallery</a></p>';
    echo '<p class="navig-ligne"><a class="change-color" href="index.php?page=liens.php&css='.$css.'&titre=Liens">Liens utils</a></p>';
    echo '<p class="navig-ligne"><span class="change-color">Text color</span><input id="navig-ligne-color" type="color" onchange="changeColor()" ></p>';
?>
