<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$ano_lancamento = filter_input(INPUT_POST, 'data_lancamento', FILTER_SANITIZE_STRING);
$img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_EMAIL);

$result_books = "INSERT INTO books (name,descricao,data_lancamento,img) values
('$nome','$descricao','$ano_lancamento','$img')";
$resultado_books = mysqli_query($conn, $result_books);

if(mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color:#52AA5E':c>Cadastro inserido com sucesso<p>";
    header("Location: ../frontend/insertbooks.php");
} else {
    $_SESSION['msg'] = "<p style='color:#DB222A':c>Cadastro não pôde ser realizado<p>";
    header("Location: ../frontend/insertbooks.php");
}