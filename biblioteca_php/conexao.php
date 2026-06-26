<?php

$conexao = mysqli_connect("localhost", "root", "1234", "biblioteca");

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}