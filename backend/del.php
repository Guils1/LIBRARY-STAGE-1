<?php
session_start();
include_once("conexao.php");
$id=filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);


$result_usuario = "DELETE FROM books WHERE id_='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)) {
     $_SESSION['msg'] = "<p style='color:#52AA5E':c>Cadastro editado com sucesso<p>";
     header("Location: ../index.php?page=books");
} else {
     $_SESSION['msg'] = "<p style='color:#DB222A':c>Cadastro não pôde ser realizado<p>";
     header("Location: ../index.php?page=books");
}
?>