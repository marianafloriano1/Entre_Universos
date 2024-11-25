<h3>Lista de livro</h3>
<div class="d-flex flex-row gap-2 float-right">
    <a class="btn btn-outline-primary" href="?p=livro/salvar">Adicionar</a>
    <a class="btn btn-outline-secondary" href="?p=livro/consultar">Consultar</a>
</div>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">isbn</th>
            <th scope="col">titulo</th>
            <th scope="col">codigo do autor</th>
            <th scope="col">data de cadastro</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once "../class/Livro.php";
        $cat = new Livro();
        $dados = $cat->listar(NULL);
        if (!empty($dados)) {
            foreach ($dados as $mostrar) {
                ?>
                <tr>
                    <th scope="row"><?= $mostrar['codigo_livro'] ?></th>
                    <td><?= $mostrar['titulo_livro'] ?></td>
                    <td><?= $mostrar['codigo_autor'] ?></td>
                    <td><?= $mostrar['data_cadastro'] ?></td>

                    <td>
                        <a href="?p=livro/salvar&codigo_livro=<?= $mostrar['codigo_livro'] ?>" class="btn btn-primary"
                            title="editar registro">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="?p=livro/excluir&codigo_livro=<?= $mostrar['codigo_livro'] ?>" class="btn btn-danger"
                            data-confirm="Excluir registro?" title="excluir registro">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>
</table>