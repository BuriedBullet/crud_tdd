<div class="container p-5">
    <h2>Lista de Filmes</h2>
    <form method="post" action="#">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="titulo" name="titulo" value="<?= isset($filme) ? $filme->titulo : "" ?>" class="form-control mb-4" placeholder="Titulo">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <input type="date" id="ano_lancamento" value="<?= isset($filme) ? $filme->ano_lancamento : "" ?>" name="ano_lancamento" class="form-control mb-4" placeholder="Data de Lançamento">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <input type="text" id="duracao" value="<?= isset($filme) ? $filme->duracao : "" ?>" name="duracao" class="form-control mb-4" placeholder="Duração do Filme">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <textarea class="form-control rounded-0" id="sinopse" rows="3" name="sinopse" placeholder="Sinopse"><?= isset($filme) ? $filme->sinopse : ""  ?></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h5>Categoria</h5>
                <?php foreach($categoria as $item): ?>
                    <?php if(isset($filme)): ?>
                        <?php foreach($filme->categoria as $value): ?>
                            <?php $item["verif"] = 0; ?>
                            <?php if($value->categoria == $item["id"]): ?>
                                <?php $item["verif"] = 1; ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="categoria[]" value="<?= $item["id"] ?>" id="categoria<?= $item["id"] ?>" checked="">
                                    <label class="custom-control-label" for="categoria<?= $item["id"] ?>"><?= $item["nome"] ?></label>
                                </div>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php if($item["verif"] == 0): ?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="categoria[]" value="<?= $item["id"] ?>" id="categoria<?= $item["id"] ?>">
                                <label class="custom-control-label" for="categoria<?= $item["id"] ?>"><?= $item["nome"] ?></label>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="categoria[]" value="<?= $item["id"] ?>" id="categoria<?= $item["id"] ?>">
                            <label class="custom-control-label" for="categoria<?= $item["id"] ?>"><?= $item["nome"] ?></label>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h5>Plataforma</h5>
                <?php foreach($plataforma as $item): ?>
                    <?php if(isset($filme)): ?>
                        <?php foreach($filme->plataforma as $value): ?>
                            <?php $item["verif"] = 0; ?>
                            <?php if($value->plataforma == $item["id"]): ?>
                                <?php $item["verif"] = 1; ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="plataforma[]" value="<?= $item["id"] ?>" id="plataforma<?= $item["id"] ?>" checked="">
                                    <label class="custom-control-label" for="plataforma<?= $item["id"] ?>"><?= $item["nome"] ?></label>
                                </div>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php if($item["verif"] == 0): ?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="plataforma[]" value="<?= $item["id"] ?>" id="plataforma<?= $item["id"] ?>">
                                <label class="custom-control-label" for="plataforma<?= $item["id"] ?>"><?= $item["nome"] ?></label>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="plataforma[]" value="<?= $item["id"] ?>" id="plataforma<?= $item["id"] ?>">
                    <label class="custom-control-label" for="plataforma<?= $item["id"] ?>"><?= $item["nome"] ?></label>
                </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <input type="hidden" name="id_filme" value="<?= isset($filme) ? $filme->id : "" ?>" />
        </div>
        <div class="row mt-3">
            <button class="btn btn-warning btn-block my-4" type="submit">Salvar</button>
        </div>
    </form>
</div>