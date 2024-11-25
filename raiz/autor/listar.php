<h3>Lista de livro</h3>
<div class="d-flex flex-row gap-2 float-right">
    <a class="btn btn-outline-primary" href="?p=livro/salvar">Adicionar</a>
    <a class="btn btn-outline-secondary" href="?p=livro/consultar">Consultar</a>
</div>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">codigo do livro</th>
            
            <th scope="col">titulo</th>
            <th scope="col">codigo do autor</th>
            <th scope="col">data de cadastro</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once "../class/Autor.php";
        $cat = new Autor();
        $dados = $cat->listar(NULL);
        if (!empty($dados)) {
            foreach ($dados as $mostrar) {
        ?>
                <tr>
                    <th scope="row"><?= $mostrar['codigo_autor'] ?></th>
                    
                    <td><?= $mostrar['nome_autor'] ?></td>
                    <td><?= $mostrar['email'] ?></td>
                    <td><?= $mostrar['senha'] ?></td>
                    <td><?= $mostrar['verificar_senha'] ?></td>

                    <td>
                        <a href="?p=autor/salvar&codigo_livro=<?= $mostrar['codigo_autor'] ?>" class="btn btn-primary"
                            title="editar registro">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="?p=autor/excluir&codigo_livro=<?= $mostrar['codigo_autor'] ?>" class="btn btn-danger"
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