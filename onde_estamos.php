<?php
    include_once("view/header1.php");
?>
<li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="sobre.php">Sobre</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="contato.php">Contato</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="#">Onde Estamos</a>
</li>
<?php
    include_once("view/header2.php");
?>
<div class="container ondeestamos">
    <h1>Onde Estamos</h1>
    <div id="map-container-google-1" class="border border-dark border-3 rounded z-depth-1-half map-container" style="height: 500px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.571333122482!2d-46.55387618447351!3d-23.691283072289437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce423578ed9473%3A0x4e27c645fbd9afdc!2sSenac%20S%C3%A3o%20Bernardo%20do%20Campo!5e0!3m2!1spt-BR!2sbr!4v1626813436005!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="row text-center">
        <div class="col-md-4 buttons">
            <a class="btn btn-dark rounded-circle btn-lg"><i class="fa fa-map-marker"></i></a>
            <p><b>São Bernardo do Campo - SP, 09750-000</b></p>
            <p><b>Brasil</b></p>
        </div>
        <div class="col-md-4 buttons">
            <a class="btn btn-dark rounded-circle btn-lg"><i class="fa fa-phone"></i></a>
            <p><b>+55 (11) 4336-7900</b></p>
            <p><b>Seg - Sext ~ 8:00-22:00</b></p>
        </div>
        <div class="col-md-4 buttons">
            <a class="btn btn-dark rounded-circle btn-lg"><i class="fa fa-envelope"></i></a>
            <p><b>fourtech88@gmail.com</b></p>
        </div>
    </div>
</div>
<?php 
    include_once("view/footer.php");
?>