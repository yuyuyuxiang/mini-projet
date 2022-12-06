<?php
    $page=$_GET['page'];
    $titre=$_GET['titre'];
    $css=$_GET['css'];
    if (($page=='')||(substr($page,0,7)=='http://')) {
        $titre = "Introduction";
        $page = "home.php";
        $css = "css0";
    }
?>
<html lang="fr">

    <head>

        <title><?php echo $titre ?></title>

        <meta charset="utf-8"/>
        <link rel="icon" type="image/x-ico" href="img/logo.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Chakra+Petch:wght@300;400&family=Righteous&family=Russo+One&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <?php echo '<link href="'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>

    </head>

    <body>
        <header>
            <?php include "header.php";//haut de page?>
        </header>

        <nav>
            <?php include "navig.php"; //menu ?>
        </nav>
        <div class="page-container">
            <?php
                include $page;
            ?>
        </div>

        <footer>
            <?php include "footer.php"; //bas de page?>
        </footer>

        <div class="typewrite-div">
            <a href="" class="typewrite" data-period="2000" data-type='[ "Salut, nous sommes Super Agence Web.", "Nous Sommes Créatifs.", "Nous Aimons Développer." ]'>
                <span class="wrap"></span>
            </a>
        </div>
        <div class="copy-right">
            <div class="loader">
                <span style="--i:1;">©</span>
                <span style="--i:2;">2</span>
                <span style="--i:3;">0</span>
                <span style="--i:4;">2</span>
                <span style="--i:5;">2</span>
                <span style="--i:6;"> </span>
                <span style="--i:7;">S</span>
                <span style="--i:8;">u</span>
                <span style="--i:9;">p</span>
                <span style="--i:10;">e</span>
                <span style="--i:11;">r</span>
                <span style="--i:12;"> </span>
                <span style="--i:13;">A</span>
                <span style="--i:14;">g</span>
                <span style="--i:15;">e</span>
                <span style="--i:16;">n</span>
                <span style="--i:17;">c</span>
                <span style="--i:18;">e</span>
                <span style="--i:19;"> </span>
                <span style="--i:20;">W</span>
                <span style="--i:21;">e</span>
                <span style="--i:22;">b</span>
                <span style="--i:23;"> </span>
                <span style="--i:24;">-</span>
                <span style="--i:25;"> </span>
                <span style="--i:26;">Y</span>
                <span style="--i:27;">u</span>
                <span style="--i:28;">x</span>
                <span style="--i:29;">i</span>
                <span style="--i:30;">a</span>
                <span style="--i:31;">n</span>
                <span style="--i:32;">g</span>
                <span style="--i:33;"> </span>
                <span style="--i:34;">e</span>
                <span style="--i:35;">t</span>
                <span style="--i:36;"> </span>
                <span style="--i:37;">M</span>
                <span style="--i:38;">i</span>
                <span style="--i:39;">k</span>
                <span style="--i:40;">e</span>
                <span style="--i:41;">.</span>
                <span style="--i:42;"> </span>
                <span style="--i:43;">A</span>
                <span style="--i:44;">l</span>
                <span style="--i:45;">l</span>
                <span style="--i:46;"> </span>
                <span style="--i:47;">r</span>
                <span style="--i:48;">i</span>
                <span style="--i:49;">g</span>
                <span style="--i:50;">h</span>
                <span style="--i:51;">t</span>
                <span style="--i:52;">s</span>
                <span style="--i:53;"> </span>
                <span style="--i:54;">r</span>
                <span style="--i:55;">e</span>
                <span style="--i:56;">s</span>
                <span style="--i:57;">e</span>
                <span style="--i:58;">r</span>
                <span style="--i:59;">v</span>
                <span style="--i:60;">e</span>
                <span style="--i:61;">d</span>
                <span style="--i:62;">.</span>
                <span style="--i:63;"> (hover me in CSS2)</span>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };

        //function background color changes when input color value changes
        function changeColor() {
            var color = document.getElementById("navig-ligne-color").value;
            //all the p color changes
            var p = document.getElementsByTagName("p");
            var p2 = document.getElementsByClassName("change-color");
            for (var i = 0; i < p.length; i++) {
                p[i].style.color = color;
            }
            for (var i = 0; i < p2.length; i++) {
                p2[i].style.color = color;
            }
        }
        // copy the list of li elements and put them in an ul element
        var list = document.querySelectorAll('li');
        var ul = document.querySelector('ul');
        for (var i = 0; i < list.length; i++) {
            ul.innerHTML += '<li>' + list[i].innerHTML + '</li>';
        }


        $(function() {
            //get list
            var $uList = $(".scroll-box ul");
            var timer = null;
            //clear timer
            $uList.hover(function() {
                    clearInterval(timer);
                },
                function() { //set time
                    timer = setInterval(function() {
                        scrollList($uList);
                    }, 1000);
                }).trigger("mouseleave"); //mouse evenement

            function scrollList(obj) {
                //get list size
                var scrollHeight = $("ul li:first").height();
                //scroll one element size
                $uList.stop().animate({
                        marginTop: -scrollHeight
                    }, 600,
                    function() {
                        //append the last to the first
                        $uList.css({
                            marginTop: 0
                        }).find("li:first").appendTo($uList);
                    });
            }
        });

        //if current css is css2, then give the class "active" to the a of the third .footer-ligne
        if ('<?php echo $css ?>' == 'css2') {
            document.querySelectorAll(".footer-ligne")[2].querySelector("a").classList.add("active");
        };
        if ('<?php echo $css ?>' == 'css1') {
            document.querySelectorAll(".footer-ligne")[1].querySelector("a").classList.add("active");
        };
        if ('<?php echo $css ?>' == 'css0') {
            document.querySelectorAll(".footer-ligne")[0].querySelector("a").classList.add("active");
        }

        if('<?php echo $titre ?>' == 'Introduction'){
            document.querySelectorAll(".navig-ligne")[0].querySelector("a").classList.add("active");
        };
        if('<?php echo $titre ?>' == 'Gallery'){
            document.querySelectorAll(".navig-ligne")[1].querySelector("a").classList.add("active");
        };
        if('<?php echo $titre ?>' == 'Les liens utils'){
            document.querySelectorAll(".navig-ligne")[2].querySelector("a").classList.add("active");
        };
    </script>
</html>