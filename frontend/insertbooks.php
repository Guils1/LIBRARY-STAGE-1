<main class="container-md mt-5">
    <?php
    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
    ?>  
    <form action="backend/pro_insert.php" method="post">
        <div class="mb-3">
        <label for="" class="form-label">Nome do livro:</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do livro">
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Descrição:</label>
        <textarea class="form-control" name="descricao" placeholder="Descrição do livro" id="descricao" rows="3"></textarea>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Data de lançamento:</label>
        <input type="text" class="form-control" name="data_lancamento" id="ano_lancamento" placeholder="Nome do livro">
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Imagem:</label>
        <input type="file" class="form-control" name="img" id="ano_lancamento" placeholder="URL do livro">
        </div>
        
        <button type="submit" class="btn btn-outline-success mt-3">Cadastrar</button>
        </div>
    </form>


</main>