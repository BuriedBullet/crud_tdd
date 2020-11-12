<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rei dos Consoles</title>
    <link rel="shotcut icon" type="image/icon" href="<?= base_url("assets/img/Logo/favicon.png") ?>" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("assets/mdb/css/bootstrap.min.css") ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url("assets/mdb/css/mdb.min.css") ?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?= base_url("assets/mdb/css/style.min.css") ?>" rel="stylesheet">
    
    <link href="<?= base_url("assets/mdb/css/addons/datatables.min.css") ?>" rel="stylesheet">
</head>
<style>
    @media (min-width: 992px) {
        img.img_carrousel_a{
            max-width: 1110px;
            max-height: 490px;
        }
        
        .card_img_a{
            max-width: 350px;
            max-height: 200px;
            min-width: 350px;
            min-height: 200px;
        }
    }
    @media (max-width: 991px) {
        img.img_carrousel_a{
            max-width: 690px;
            max-height: 389px;
            min-width: 690px;
            min-height: 389px;
        }
        
        .card_img_a{
            max-width: 250px;
            max-height: 150px;
            min-width: 250px;
            min-height: 150px;
        }
    }

    .md-v-line {
        position: absolute;
        border-left: 1px solid rgba(0,0,0,.125);
        height: 50px;
        top:0px;
        left:54px;
    }

    .md-v-line_r{
        position: absolute;
        border-left: 1px solid rgba(0,0,0,.125);
        height: 50px;
        top:0px;
        left:110px;   
    }
    <?php if($header == 2): ?>
    .view {
        background: url("../../../assets/img/<?= $navbar_d->img ?>")no-repeat center center;
        background-size: cover;
    }

    .navbar {
        background-color: transparent;
    }

    .top-nav-collapse {
        background-color: #cc0000;
    }

    @media only screen and (max-width: 768px) {
        .navbar {
            background-color: #cc0000;
        }
    }

    html,
    body,
    header,
    .view {
      height: 90%;
    }
    <?php endif; ?>
</style>
<body>