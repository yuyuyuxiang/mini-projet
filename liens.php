<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<h1> Les liens </h1>
<div class="liens">
    <p> Soumettez vos liens !!!</p>
    <form name="form" id="form1" method="GET" action="addlink.php">
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
<li><a href="https://github.com/yuyuyuxiang/mini-projet"><b>Mon page Github</b> : https://github.com/yuyuyuxiang/mini-projet</a></li><li><b class="change-color">CodePen</b> : https://codepen.io/trending</li>
<li><b class="change-color">ILOVEU</b> : http://rtrtrtrtr</li><li><b class="change-color">BLABLA</b> : http://blablabla.com</li><li><b class="change-color">AAAA</b> : http://aaaaaaaa</li>