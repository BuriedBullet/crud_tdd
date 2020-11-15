<div class="container p-5">
    <h2>Lista de Filmes</h2>
    <div class="row p-3">
        <?php foreach($filmes as $item): ?>
            <div class="col-sm-4 col-xs-12 p-2">
                <div class="card">
                    <h5 class="card-header"><?= $item->titulo ?></h5>
                    <div class="card-body">
                        <h5 class="card-text">Data Lançamento: <?= $item->ano_lancamento_br ?></h5>
                        <h5 class="card-text">Duração: <?= $item->duracao ?></h5>
                        <h5 class="card-text">Categorias: </h5>
                        <?php foreach($item->categoria as $value): ?>
                            <span class="badge badge-pill badge-danger"><?= $value->nome["nome"] ?></span>
                        <?php endforeach; ?>
                        <br/>
                        <h5 class="card-text">Plataformas: </h5>
                        <?php foreach($item->plataforma as $value): ?>
                            <span class="badge badge-pill badge-danger"><?= $value->nome["nome"] ?></span>
                        <?php endforeach; ?>
                        <br/>
                        <p class="card-text"><?= $item->sinopse ?></p>
                        <a href="<?= base_url("Home/insere_filme/$item->id") ?>" class="btn btn-warning">Editar</a>
                        <a href="<?= base_url("Home/exclui_filme/$item->id") ?>" class="btn btn-danger">Excluir</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>