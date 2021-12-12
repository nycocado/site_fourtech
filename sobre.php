<?php
    include_once("view/header1.php");
?>
<li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="#">Sobre</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="contato.php">Contato</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="onde_estamos.php">Onde Estamos</a>
</li>
<?php
    include_once("view/header2.php");
    include("view/txt/texto_sobre.php");

?>
<div class="container texto">
    <h1>FourTech</h1>
    <p><?=$text?></p>
    <div class="marcas">
        <h1>Trabalhamos com as seguintes marcas:</h1>
        <?php
        $n001=0;
        for($n01=1;$n01<=24;$n01++){
            $n001++;
            echo("<img src='view/img/sobre/logo_".$n001.".png' class='img-fluid' alt='Logo da marca ".$logo[0][$n001]."'>");
        }
        ?>
    </div>
</div>
<?php
    include_once("view/footer.php");
?>