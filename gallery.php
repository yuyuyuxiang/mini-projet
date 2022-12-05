 <link rel="stylesheet" type="text/css" href="colorbox/colorbox.css"/>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>

    <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
    <style>
        .miniatures{
            box-sizing: border-box;
            width: 100%;
            margin: auto;
            column-count: 3;
            column-gap: 10px;
        }
        #slide-img{
            margin-bottom: 20px;
            width: 200px;
        }
        #slide-img img{
            width: 100%;
            margin-bottom: 10px;
        }
        @media screen and (max-width: 900px) {
            .miniatures{
                column-count: 2;
            }
        }
        @media screen and (max-width: 500px) {
            .miniatures{
                column-count: 2;
            }
        }
    </style>
 <p class="gallery-description">Whereas most of us know what an art museum is and what they do – more or less – when it comes to art galleries, it seems the public opinion is less familiar with them.

     An art gallery is an exhibition space to display and sell artworks. As a result, the art gallery is a commercial enterprise working with a portfolio of artists. The gallery acts as the dealer representing, supporting, and distributing the artworks by the artists in question.

     However, we must also note that not all galleries are the same. Although most art galleries work according to a similar method and organization, there are different types of art galleries implementing another procedure. In this case, we will have to discuss each type individually, presenting a thorough overview of what an art gallery is and in what shape or form it can present itself.</p>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="miniatures">
    <a id="slide-img" href="img/photo1.jpg" title="image 1: Titre 1"><img src="img/photo1.jpg" /></a>
    <a id="slide-img" href="img/photo3.jpeg" title="image 2: Titre 2"><img src="img/photo3.jpeg" /></a>
    <a id="slide-img" href="img/photo2.jpeg" title="image 3:Titre 3"><img src="img/photo2.jpg" /></a>
    <a id="slide-img" href="img/photo5.jpg" title="image 3:Titre 4"><img src="img/photo5.jpg" /></a>
    <a id="slide-img" href="img/photo6.jpg" title="image 3:Titre 4"><img src="img/photo6.jpg" /></a>
    <a id="slide-img" href="img/photo7.jpg" title="image 3:Titre 4"><img src="img/photo7.jpg" /></a>
    <a id="slide-img" href="img/photo8.jpg" title="image 3:Titre 4"><img src="img/photo8.jpg" /></a>
    <a id="slide-img" href="img/photo2.jpeg" title="image 3:Titre 4"><img src="img/photo2.jpeg" /></a>
    <a id="slide-img" href="img/photo10.jpg" title="image 3:Titre 4"><img src="img/photo10.jpg" /></a>
    <a id="slide-img" href="img/photo4.jpg" title="image 3:Titre 4"><img src="img/photo4.jpg" /></a>
</div>

<script type="text/javascript" src="slick/slick/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.miniatures a').colorbox({rel:'a', transition:"none", width:"80%", height:"90%"});
    });
</script>