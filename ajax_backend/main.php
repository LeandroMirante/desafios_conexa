<?php
include 'data.php';
include 'gerenciador_voos.php';
include 'voo.php';
session_start();

if (!isset($_SESSION['reservas'])) {
    $_SESSION['reservas'] = new GerenciadorVoos;
}

$gerenciador_voos = isset($_SESSION['reservas']) ? $_SESSION['reservas'] : null;


$formDate = explode('-', $_POST['date']);

$date = new Data($formDate[2], $formDate[1], $formDate[0]);

$voo = $gerenciador_voos->adicionarVoo($_POST['numVoo'], $date);

$_SESSION['reservas'] = $gerenciador_voos;

$voo->ocupa(1);

echo json_encode($voo);

//print_r($voo);
