<?php

$a1 = [
    'nome' => 'Marcos',
    'email' => "marcos@email.com",
    'telefone' => '71 9 8242-0001',
    'notas' => [
        9,
        8.4,
        9.6,
        7
    ]
];

$a2 = [
    'nome' => 'Josy',
    'email' => "josy@email.com",
    'telefone' => '71 9 8242-0002',
    'notas' => [
        2,
        8.2,
        6.6,
        3
    ]
];

$a3 = [
    'nome' => 'Ana',
    'email' => "ana@email.com",
    'telefone' => '71 9 8242-0001',
    'notas' => [
        9,
        5.4,
        6.7,
        9
    ]
];

$alunos = [
    $a1,
    $a2,
    $a3
];



?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <table class="table table-hover table-stripped mt-5">
        <thead class="table-dark">
            <h1 class="mt-5">Alunos</h1>
            <hr>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($alunos as $cadaAluno) {
                echo '<tr>';
                echo '<td>' . $cadaAluno['nome'] . '</td>';
                echo '<td>' . $cadaAluno['email'] . '</td>';
                echo '<td>' . $cadaAluno['telefone'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>