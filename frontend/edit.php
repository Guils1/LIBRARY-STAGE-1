<?php
include_once("backend/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_books = "SELECT * FROM books WHERE id_='$id'";
$resultado_books = mysqli_query($conn, $result_books);
$row_books = mysqli_fetch_assoc($resultado_books);
?>

<main class="container-md">
    <?php
    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
    ?>   
    <form action="../backend/pro_edit.php?id=<?php echo $id; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $row_books['id'];?>">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo $row_books['nome'];?>" id="">
        <br>
        <br>
        <label for="nome" class="form-label">Descrição:</label>
        <input type="text" name="descricao" class="form-control" placeholder="descricao" value="<?php echo $row_books['descricao'];?>" id="">
        <br>
        <br>
        <label for="nome" class="form-label">Ano de lançamento:</label>
        <input type="text" name="data_lancamento" class="form-control" placeholder="ano_lancamento" value="<?php echo $row_books['ano_lancamento'];?>" id="">
        <br>
        <br>
        <label for="" class="form-label">Link da imagem:</label>
        <input type="url" name="img" class="form-control" placeholder="img" value="<?php echo $row_books['img'];?>" value="" id="">
        <br>
        <br>
        <input type="submit" class="btn btn-success" value="Editar">
        <a href="../index.php?page=books"> <button type="button" class="btn btn-danger">Voltar</button> </a>
    </form>
</main>