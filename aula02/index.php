<!--
 Code Terminal para PHP
 php -S localhost:8000 (Rodar Servidor PHP)
 php -S localhost:8000 -t NomeDaPasta (Rodar Servidor PHP apontando para uma pasta especifica)
 php -a (Rodar PHP Interativo)
-->

<form action="" method="post">
    <input class="form-control mb-3" type="text" name="nome" placeholder="Nome"> <br>

    <input class="form-control mb-3" type="text" name="cidade" placeholder="Cidade"> <br>

    <button class="btn btn-primary" >Enviar</button class="btn btn-primary" >
</form>

<?php
    if($_POST) {
        echo "Oi " . $_POST['nome'];
    }

    // Ways Ternary Operators
    //$ano = 2022;
    //echo $ano ? $ano : "Novo Ano";
    //echo $ano ?? "Novo Ano";