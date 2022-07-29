<?php

function login()
{
    include_once 'telas/login.php';
}

function cadastro()
{
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $arquivo = fopen('dados/contatos.csv', 'a+');

        fwrite($arquivo, "{$nome};{$email};{$telefone}" . PHP_EOL);

        fclose($arquivo);


        $mensagem = "Pronto, Cadastro Realizado!";
        include_once 'telas/mensagem.php';
    }

    include_once 'telas/cadastro.php';
}

function home()
{
    include_once 'telas/home.php';
}

function listar()
{
    $contatos = file('dados/contatos.csv');
    include_once 'telas/listar.php';
}

function error404()
{
    include_once 'telas/404.php';
}

function relatorio()
{
    include_once 'telas/relatorio.php';
};

function excluir()
{
    $id = $_GET['id'];

    $contatos = file('dados/contatos.csv');

    //Remover o dado setado
    unset($contatos[$id]);

    // Excluir arquivo
    unlink('dados/contatos.csv');

    //Criar Arquivo Novamente
    $arquivo = fopen('dados/contatos.csv', 'a+');

    foreach($contatos as $cadaContato) {
        fwrite($arquivo, $cadaContato);
    };

    $mensagem = "Pronto, Contato Excluido";
    include_once 'telas/mensagem.php';
}


function editar() {
    // Capturar o Id da URL
    $id = $_GET['id'];

    // Selecionar o Arquivo
    $contatos = file('dados/contatos.csv');

    // Dados recebidos do Form de Editar
    if($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        // Salvar os Dados Atualizados
        $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;

        // Excluir Arquivo
        unlink('dados/contatos.csv');

        //Criar Arquivo Novamente
        $arquivo = fopen('dados/contatos.csv', 'a++');

        foreach ($contatos as $cadaContato) {
            fwrite($arquivo, $cadaContato);
        }

        fclose($arquivo);

        $mensagem = "Pronto, Contato Atualizado";
        include_once 'telas/mensagem.php';
    }

    // Seleciona cada colunda do arquivo
    $dados = explode(";", $contatos[$id]);

    include_once 'telas/editar.php';
}