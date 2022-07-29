<?php

/* Está vázio */
//var_dump($_GET);

if($_GET) {
    echo $_GET['nome'];
}

/* 
Adicionar na URL os parâmetros
http://localhost:8000/get.php?nome=Marcos&cidade=Salvador&uf=BA 
O $_GET agora tem conteúdo
*/

