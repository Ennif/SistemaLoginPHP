<?php

include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$querry = "select idusuario, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_querry($conexao,$querry);

$row = mysqli_num_rows($result);
