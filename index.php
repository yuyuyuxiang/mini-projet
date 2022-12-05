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
            <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, we are Super Agence Web.", "We are Creative.", "We Love to Develop." ]'>
                <span class="wrap"></span>
            </a>
        </div>

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
    </body>
</html>