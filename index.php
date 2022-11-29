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
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Chakra+Petch:wght@300;400&family=Righteous&family=Russo+One&display=swap" rel="stylesheet">

        <?php echo '<link href="'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>
        <style>
            .typewrite{
                color: #000000;
                text-decoration: none;
            }
        </style>

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


        </script>
    </body>
</html>