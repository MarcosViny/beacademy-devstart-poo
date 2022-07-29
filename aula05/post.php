<form action="" method="post">
    <label for="idNome">Nome</label>
    <input class="form-control mb-3" type="text" name="idNome" id="nome">

    <button class="btn btn-primary" >Enviar</button class="btn btn-primary" >
</form>

<?php
    if($_POST) {
        echo $_POST['nome'];
    }