<div class="container p-5">
    <h2>Lista de Filmes</h2>
    <div class="row p-3">
        <?php foreach($filmes as $item): ?>
            <div class="col-sm-4 col-xs-12">
                <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>