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
    <a class="nav-link active" href="#">Contato</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="onde_estamos.php">Onde Estamos</a>
</li>
<?php
    include_once("view/header2.php");
    include("view/txt/opcoescontato.php");
?>
<div class="container form_cont">
    <h1>Interessado em nossos serviços? Entre em contato conosco.</h1>
    <div class="border border-dark border-3 rounded p-4">
        <form class="row g-3 form" method="POST" action="./email.php">
            <div class="col-12">
                <label for="inputName" class="form-label">Nome</label>
                <input type="text" required class="form-control" id="inputName" placeholder="ex: João Augusto da Silva">
            </div>
            <div class="col-6">
                <label for="inputCNPJ" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="inputCNPJ" placeholder="ex: 12.123.123/0001-03">
            </div>
            <div class="col-6">
                <label for="inputCPF" class="form-label">CPF</label>
                <input type="text" required class="form-control" id="inputCPF" placeholder="ex: 123.456.789-09">
            </div>
            <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" required class="form-control" id="inputEmail" placeholder="ex: senacsbc@gmail.com">
            </div>
            <div class="col-8">
                <label for="inputAddress" class="form-label">Endereço</label>
                <input type="text" required class="form-control" id="inputAddress" placeholder="ex: Av. Paulista">
            </div>
            <div class="col-4">
                <label for="inputNumber" class="form-label">Numero</label>
                <input type="text" required class="form-control" id="inputNumber" placeholder="ex: 1159">
            </div>
            <div class="col-3">
                <label for="inputBairro" class="form-label">Bairro</label>
                <input type="text" required class="form-control" id="inputBairro" placeholder="ex: Bela Vista">
            </div>
            <div class="col-9">
                <label for="inputComplemento" class="form-label">Complemento</label>
                <input type="text" required class="form-control" id="inputComplemento" placeholder="ex: Conjunto 611">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" required class="form-control" id="inputCity" placeholder="ex: São Paulo">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Estado</label>
                <select id="inputState" required class="form-select">
                    <option selected>...</option>
                    <?php
                    $es=0;
                    for($n01=1;$n01<=28;$n01++){
                        echo("<option value=".$estados[0][$es].">".$estados[1][$es]."</option>");
                        $es++;
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputCEP" class="form-label">CEP</label>
                <input type="text" required class="form-control" id="inputCEP" placeholder="ex: 01234-123">
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea2" style="height: 200px; resize: none;"></textarea>
                <label for="floatingTextarea2">Como podemos te ajudar? Informe sua necessidade</label>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>
<?php 
    include_once("view/footer.php");
?>