<main class="container-md mt-2">
        <div class="row justify-content-center mt-4 mb-2">
            <div class="col col-lg-12 mt-5">
                <h1 style="text-align: center;">Livros</h1>
                <?php
                    $result_books = "SELECT * FROM books b left join authors a on b.id_=a.id;";
                    $resultado_books = mysqli_query($conn, $result_books);
                    while($row_books = mysqli_fetch_assoc($resultado_books)) {
                        echo '<div class="card mb-3">
                        <img src="' .$row_books["img"] .'" class="card-img-top" alt="..." style:" height=600em;">
                        <div class="card-body">
                            <h5 class="card-title">' .$row_books["name"] .'</h5>
                            <p class="card-text">' .$row_books["descricao"] .'</p>
                            <h6 class="card-title">Gênero:</h6>
                            <h6 class="card-title">Autor:' .$row_books["name_a"] .'</h6>
                            <h6 class="card-title">Ano de lançamento:'.$row_books["ano_lancamento"] .'</h6>

                            <a href="frontend/edit.php?v=editbooks&id='.$row_books["id_"].'"><button type="button" class="btn btn-success mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-pencil"
                            viewBox="0 0 16 16">
                            <path
                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                                </button></a>
                                <a href="backend/del.php?id='.$row_books["id_"].'"><button type="button" class="btn btn-danger mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                    
                                </button></a>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    ';
                    }
                ?>
            </div>
        </div>
    </div>
</main>