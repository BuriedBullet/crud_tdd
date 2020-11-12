<div class="container p-5">
    <h2>Lista de Teste feito nas funções</h2>
    <div class="row p-3">
        <?php foreach($teste as $key => $item): ?>
        <div class="col-sm-4 col-xs-12 p-3">
            <div class="card border-dark">
                <h5 class="card-header">Teste <?= $key+1 ?></h5>
                <div class="card-body">
                    <?= $item ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>