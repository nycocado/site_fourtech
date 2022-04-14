<?php
    include_once("view/header1.php");
?>
<li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="sobre.php">Sobre</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="contato.php">Contato</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="onde_estamos.php">Onde Estamos</a>
</li>
<?php
    include_once("view/header2.php");
?>
<main class="header">
    <img src="view/img/index/img_header.jpg" class="img-fluid" alt="Foto interna de um computador">
    <div class="title_header">
        <h1>
            <a class="typewrite" data-period="2000" data-type='["FourTech"]'>
            <span class="wrap"></span></a>
        </h1>
        <h2>Soluções para Micro Empresas e Pequenos Negócios</h2>
    </div>
</main>
<?php
include("view/cards/textos.php");
$ini=0;
$n001=1;
for($n=0;$n<=2;$n++){
    if($ini==0){
        echo("<section class='container' style='padding-bottom: 0px !important;'>");
    }elseif($ini==2){
        echo("<section class='bg-dark'>");
        echo("<div class='container'>");
    }else{
        echo("<section class='container'>");
    }
    echo("<h2 class='espacamento");
    if($ini==2){
        echo(" text-light");
    }
    echo("'>".$cards_title[0][$n]."</h2>");
    if($ini==2){
        echo("<div class='final'>");
    }
    echo("<div class='row row-cols-1 row-cols-md-4 g-4'>");
    for($n01=0;$n01<=3;$n01++){
        echo("<div class='col'>");
        if($ini==2){
            echo("<div class='card h-100 bg-dark border-light'>");
        }else{
            echo("<div class='card h-100 border-dark'>");
        }
        echo("<img src='view/img/index/card_".$n001.".jpg' class='card-img-top' alt='".$cards_marcas[0][$n001]."'>");
        echo("<div class='card-body d-flex flex-column'>");
        echo("<h5 class='card-title");
        if($ini==2){
            echo(" text-light");
        }
        echo("'>".$cards_titulo[0][$n001]."</h5>");
        echo("<p class='card-text");
        if($ini==2){
            echo(" text-light");
        }
        echo("'>".$cards_texto[0][$n001]."</p>");
        echo("<a href='contato.php' class='btn ");
        if($ini==2){
            echo("btn-light");
        }else{
            echo("btn-dark");
        }
        echo(" btn-block mt-auto'>Entre em Contato</a>");
        echo("</div>");
        echo("</div>");
        echo("</div>");
        $n001++;
    }
    echo("</div>");
    if($ini==2){
        echo("</div>");
        echo("</div>");
    }
    echo("</section>");
    $ini++;
}
?>
<?php 
    include_once("view/footer.php");
?>