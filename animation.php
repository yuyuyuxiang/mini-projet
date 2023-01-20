 <link rel="stylesheet" type="text/css" href="colorbox/colorbox.css"/>
 <script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <h1 class="change-color">Animations</h1>
 <span class="change-color">Text color</span><input id="navig-ligne-color" type="color" onchange="changeColor()" >
 <div class="gallery-description-div">
     <p class="gallery-description">
         La propriété animation est une propriété raccourcie qui permet de d'appliquer une animation entre des styles.
         C'est une propriété qui synthétise les propriétés suivantes :
     </p>

     <ul>
         <li>animation-name,</li>
         <li>animation-duration,</li>
         <li>animation-timing-function,</li>
         <li>animation-delay,</li>
         <li>animation-iteration-count,</li>
         <li>animation-direction,</li>
         <li>animation-fill-mode,</li>
         <li>animation-play-state.</li>
     </ul>

     <h2>Que sont les animations CSS ?</h2>
     <p class="gallery-description">
     Une animation permet à un élément de passer progressivement d'un style à un autre.

     Vous pouvez modifier autant de propriétés CSS que vous le souhaitez, autant de fois que vous le voulez.

     Pour utiliser une animation CSS, vous devez d'abord spécifier des images clés pour l'animation.

     Les images clés indiquent les styles que l'élément aura à certains moments.
     </p>

     <h2>La règle @keyframes</h2>
     <p class="gallery-description">
     Lorsque vous spécifiez des styles CSS dans la règle @keyframes, l'animation passe progressivement du style actuel au nouveau style à certains moments.

     Pour qu'une animation fonctionne, vous devez la lier à un élément.
     </p>
 </div>
 <div class="animation-box">
     <div class="col">
         <p class="note">
             Avec l'animation suivante :
         <pre>
             @keyframes slidein {
                  from { transform: scaleX(0); }
                  to   { transform: scaleX(1); }
             }
         </pre>
         </p>
         <div class="row">
             <div class="cell">
                 <button class="play anim-button" title="LECTURE"></button>
             </div>
             <div class="cell flx">
                 <div class="overlay">animation: 3s ease-in 1s 2 reverse both paused slidein;</div>
                 <div class="animation a1"></div>
             </div>
         </div><br>
         <div class="row">
             <div class="cell">
                 <button class="pause anim-button" title="PAUSE"></button>
             </div>
             <div class="cell flx">
                 <div class="overlay">animation: 3s linear 1s slidein;</div>
                 <div class="animation a2"></div>
             </div>
         </div><br>
         <div class="row">
             <div class="cell">
                 <button class="pause anim-button" title="PAUSE"></button>
             </div>
             <div class="cell flx">
                 <div class="overlay">animation: 3s slidein;</div>
                 <div class="animation a3"></div>
             </div>
         </div>
     </div>
 </div>
<br>
 <div class="animation-box">
     <div class="col">
         <p class="note">
             Avec l'animation suivante :
         <pre>
             @keyframes rotation {
                  from { transform: rotate(-5deg); }
                  to   { transform: scaleX(5deg); }
             }
         </pre>
         </p>
         <div class="row">
             <div class="cell">
                 <button class="play anim-button" title="LECTURE"></button>
             </div>
             <div class="cell flx">
                 <div class="overlay">animation: 1s 2 reverse rotation;</div>
                 <div class="animation a4"></div>
             </div>
         </div><br>
         <div class="row">
             <div class="cell">
                 <button class="pause anim-button" title="PAUSE"></button>
             </div>
             <div class="cell flx">
                 <div class="overlay">animation: .5s linear 1s infinite alternate rotation;</div>
                 <div class="animation a5"></div>
             </div>
         </div><br>
         <div class="row">
             <div class="cell">
                 <button class="pause anim-button" title="PAUSE"></button>
             </div>
             <div class="cell flx">
                 <div class="overlay">animation: 1s rotation;</div>
                 <div class="animation a6"></div>
             </div>
         </div>
     </div>
 </div>



 <script>
     window.addEventListener('load', function () {
         var ANIMATION = Array.from(document.querySelectorAll('.animation'));
         var BUTTON    = Array.from(document.querySelectorAll('button'));

         function toggleButton (btn, type) {
             btn.classList.remove('play', 'pause', 'restart');
             btn.classList.add(type);
             btn.title = type.toUpperCase(type);
         }

         function playPause (i) {
             var btn  = BUTTON[i];
             var anim = ANIMATION[i];

             if (btn.classList.contains('play')) {
                 anim.style.animationPlayState = 'running';
                 toggleButton(btn, 'pause');
             } else if (btn.classList.contains('pause')) {
                 anim.style.animationPlayState = 'paused';
                 toggleButton(btn, 'play');
             } else {
                 anim.classList.remove('a' + (i + 1));
                 setTimeout(function () {
                     toggleButton(btn, i === 0 ? 'play' : 'pause');
                     anim.style.animationPlayState = '';
                     anim.classList.add('a' + (i + 1));
                 }, 100)
             }
         }

         ANIMATION.forEach(function (node, index) {
             node.addEventListener('animationstart', function () { toggleButton(BUTTON[index], 'pause');   });
             node.addEventListener('animationend',   function () { toggleButton(BUTTON[index], 'restart'); });
         });

         BUTTON.forEach(function (btn, index) {
             btn.addEventListener('click', function () { playPause(index); });
         });
     })

 </script>
 <br><br>
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

<script type="text/javascript">
    $(document).ready(function(){
        $('.miniatures a').colorbox({rel:'a', transition:"none", width:"80%", height:"90%"});
    });
</script>