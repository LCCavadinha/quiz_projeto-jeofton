<?php
session_start();

if (!isset($_SESSION['perguntas'])) {
    header('Location: index.php');
    exit;
}
$perguntas = $_SESSION['perguntas'];
$pergunta_atual = $_SESSION['pergunta_atual'];

if ($pergunta_atual >= count($perguntas)) {
    header('Location: resultado.php');
    exit;
}
$pergunta = $perguntas[$pergunta_atual];
