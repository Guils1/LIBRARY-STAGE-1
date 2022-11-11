<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao');
$data_lancamento = filter_input(INPUT_POST, 'data_lancamento');
$img = filter_input(INPUT_POST, 'img');

$result_books = "UPDATE books SET name='$nome', descricao='$descricao', data_lancamento = '$data_lancamento', img='$img' WHERE id_='$id'";
$resultado_books = mysqli_query($conn, $result_books);

if(mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color:#52AA5E':c>Cadastro editado com sucesso<p>";
    header("Location: ../index.php?page=books");
} else {
    $_SESSION['msg'] = "<p style='color:#DB222A':c>Cadastro não pôde ser realizado<p>";
    header("Location: ../index.php?page=books");
}