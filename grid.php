<h1>CSS Grid</h1>
<span class="change-color">Text color</span><input id="navig-ligne-color" type="color" onchange="changeColor()" >
<h2>Grilles CSS (CSS Grid)</h2>
<p class="gallery-description">Le module CSS Grid layout (modèle de disposition en grille) est un module de la spécification CSS qui permet de créer des mises en page en divisant l'espace d'affichage en régions utilisables par une application ou en définissant des relations de taille, position et d'empilement entre les éléments HTML.</p>

<p class="gallery-description">Comme les tableaux, la grille permet d'aligner des éléments sous forme de colonnes et de lignes mais à la différence des tableaux, la grille n'a pas de structure de contenu. Ainsi, on peut créer de nombreuses mises en page qui n'auraient pas été possibles avec les tableaux. Ainsi, les éléments fils d'un conteneur en grille peuvent être positionnés afin qu'ils se chevauchent ou qu'ils se comportent comme des éléments positionnés.</p>
<br>
<h2>Un exemple simple</h2>
<p class="gallery-description">Dans l'exemple qui suit, on montre comment utiliser une grille avec trois pistes en colonnes pour laquelle les nouvelles lignes créées mesureront au moins 100 pixels et auront au plus la taille automatique (définie par leur contenu). Les éléments sont placés sur la grille grâce aux numéros des lignes horizontales et verticales.</p>
<br>
<h3>HTML</h3>
<pre class="code">
    &lt;div class="grid"&gt;
        &lt;div class="un"&gt;1&lt;/div&gt;
        &lt;div class="deux"&gt;2&lt;/div&gt;
        &lt;div class="trois"&gt;3&lt;/div&gt;
        &lt;div class="quatre"&gt;4&lt;/div&gt;
        &lt;div class="cinq"&gt;5&lt;/div&gt;
        &lt;div class="six"&gt;6&lt;/div&gt;
    &lt;/div&gt;
</pre>

<h3>CSS</h3>
<pre class="code">
    .grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 10px;
      grid-auto-rows: minmax(100px, auto);
    }
    .un {
      grid-column: 1 / 3;
      grid-row: 1;
    }
    .deux {
      grid-column: 2 / 4;
      grid-row: 1 / 3;
    }
    .trois {
      grid-column: 1;
      grid-row: 2 / 5;
    }
    .quatre {
      grid-column: 3;
      grid-row: 3;
    }
    .cinq {
      grid-column: 2;
      grid-row: 4;
    }
    .six {
      grid-column: 3;
      grid-row: 4;
    }
</pre>
    <div class="grid">
        <div class="un">1</div>
        <div class="deux">2</div>
        <div class="trois">3</div>
        <div class="quatre">4</div>
        <div class="cinq">5</div>
        <div class="six">6</div>
    </div>
<br>
<h3>Grid de la CSS2</h3>
<pre class="code">
    body{
        margin: 0;
        padding-top: 40px;
        display: grid;
        grid-template-columns: 15% auto 15%;
        grid-template-rows: 200px auto auto 60px;
    }
    @media screen and (max-width: 900px){
        body{
            grid-template-columns: 100%;
            grid-template-rows: 200px auto auto auto auto 60px;
        }
    }
    header{
        grid-column: 2/3;
        grid-row: 1/2;
    }
    @media screen and (max-width: 900px){
        header{
            grid-column: 1/2;
            grid-row: 1/2;
        }
    }
    nav{
        grid-column: 1/2;
        grid-row: 2/2;
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    @media screen and (max-width: 900px){
        nav{
            display: flex;
            flex-direction: row;
            margin-bottom: 20px;
            grid-column: 1/2;
            grid-row: 2/3;
        }
    }
    div.page-container{
        grid-column: 2/3;
        grid-row: 2/2;
    }
    @media screen and (max-width: 900px){
        div.page-container{
            grid-column: 1/2;
            grid-row: 3/4;
        }
    }
    footer{
        grid-column: 3/3;
        grid-row: 2/2;
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    @media screen and (max-width: 900px){
        footer{
            display: flex;
            flex-direction: row;
            margin-top: 20px;
            grid-column: 1/2;
            grid-row: 4/5;
        }
    }
    .typewrite-div{
        grid-column: 2/3;
        grid-row: 3/4;
    }
    .copy-right{
        grid-column: 1/4;
        grid-row: 4/4;
    }
    @media screen and (max-width: 900px){
        .copy-right{
            grid-column: 1/2;
            grid-row: 6/6;
        }
        .typewrite-div{
            grid-column: 1/2;
            grid-row: 5/6;
        }
    }
</pre><br>
<h2>Propriétés CSS Grid</h2>
<ul>
    <li class="grid-li">grid-template-columns</li>
    <li class="grid-li">grid-template-rows</li>
    <li class="grid-li">grid-template-areas</li>
    <li class="grid-li">grid-template</li>
    <li class="grid-li">grid-auto-columns</li>
    <li class="grid-li">grid-auto-rows</li>
    <li class="grid-li">grid-auto-flow</li>
    <li class="grid-li">grid</li>
    <li class="grid-li">grid-row-start</li>
    <li class="grid-li">grid-column-start</li>
    <li class="grid-li">grid-row-end</li>
    <li class="grid-li">grid-column-end</li>
    <li class="grid-li">grid-row</li>
    <li class="grid-li">grid-column</li>
    <li class="grid-li">grid-area</li>
    <li class="grid-li">grid-row-gap</li>
    <li class="grid-li">grid-column-gap</li>
    <li class="grid-li">gap</li>
</ul>