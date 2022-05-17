<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD - PHP FETCH</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between aling-items-center">
                <div>
                    <h4>ESTOQUE</h4>
                </div>

                <div>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#cadProdutoModal">
                        Cadastrar
                    </button>

                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">

                <span class="listar-produto"></span>



            </div>
        </div>
    </div>
    <div class="modal fade" id="cadProdutoModal" tabindex="-1" aria-labelledby="cadProdutoModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadProdutoModal">Novo Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="cad-produto-form">
                        <span  id="msgAlerta"></span>
                        <div class="mb-3">
                            <label for="nome" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome" required>
                        </div>

                        <div class="mb-3">
                            <label for="categoria" class="col-form-label">Categoria:</label>
                            <input type="text"  name="categoria" class="form-control" id="categoria" required>
                        </div>

                        <div class="mb-3">
                            <label for="valor" class="col-form-label">Valor:</label>
                            <input type="number" name="valor" min="0.00" max="10000.00" step="0.01" class="form-control" id="valor" placeholder="Ex: 3.50" required>

                            <!-- <textarea class="form-control" id="message-text"></textarea> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" class="btn btn-primary" value="Salvar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>