<?php
    include_once("view/header.php");
?>
<li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="sobre.html">Sobre</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="contato.html">Contato</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="onde_estamos.html">Onde Estamos</a>
</li>
<?php
    include_once("view/header_fim.php");
?>
<div class="header">
    <img src="img/img_01.jpg" class="img-fluid" alt="Computador por dentro">
    <div class="title_header">
        <h1>
            <a class="typewrite" data-period="2000" data-type='[ "FourTech" ]'>
            <span class="wrap"></span></a>
        </h1>
        <h2>Soluções para Micro Empresas e Pequenos Negócios</h2>
    </div>
</div>
<?php
include("cards.inc");
$ini=0;
$n001=0;
for($n=0;$n<=2;$n++){
    if($ini==0){
        echo("<section class='container' style='padding-bottom: 0px !important;'>");
    }elseif($ini==2){
        $fim=1;
        echo("<section class='bg-dark'>");
        echo("<div class='container'>");
    }else{
        echo("<section class='container'>");
    }
    echo("<h2 class='espacamento ");
    if($ini==2){
        echo("texto_branco");
    }
    echo("'>".$cards_title[0][$n]."</h2>");
    if($ini==2){
        echo("<div class='final'>");
    }
    echo("<div class='row row-cols-1 row-cols-md-4 g-4'>");
    $ini++;
    for($n01=0;$n01<=3;$n01++){
        echo("<div class='col'>");
        echo("<div class='card h-100 border-dark'>");
        echo("<img src='img/pc_".$n001.".jpg' class='card-img-top' alt='Computador da marca'>");
        echo("<div class='card-body d-flex flex-column'>");
        echo("<h5 class='card-title'>".$cards_titulo[0][$n001]."</h5>");
        echo("<p class='card-text'>".$cards_texto[0][$n001]."</p>");
        echo("<a href='contato.html' class='btn btn-dark btn-block mt-auto'>Entre em Contato</a>");
        echo("</div>");
        echo("</div>");
        echo("</div>");
        $n001++;
    }
    echo("</div>");
    if($ini==3){
        echo("</div>");
        echo("</div>");
    }
    echo("</section>");
}
?>
<?php 
    include_once("view/footer.php");
?>