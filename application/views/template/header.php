<!doctype html>
<html lang="pt-BR">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link href="<?= base_url("assets/mdb/css/bootstrap.min.css") ?>" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="<?= base_url("assets/mdb/css/mdb.min.css") ?>" rel="stylesheet">
      <!-- Your custom styles (optional) -->
      <link href="<?= base_url("assets/mdb/css/style.min.css") ?>" rel="stylesheet">
      
      <link href="<?= base_url("assets/mdb/css/addons/datatables.min.css") ?>" rel="stylesheet">

      <title>Teste de CRUD!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="<?= base_url("Home") ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url("Home") ?>">Pagina Inicial <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Inserir Filme</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("Home/teste_funcoes") ?>">Testes de Funções</a>
          </li> 
        </ul>
      </div>
    </nav>