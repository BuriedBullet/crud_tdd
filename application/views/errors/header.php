<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url("assets/admin/css/bootstrap.min.css") ?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= base_url("assets/admin/css/mdb.min.css") ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= base_url("assets/admin/css/style.min.css") ?>" rel="stylesheet">
  <style>

    .map-container{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
        }
        .map-container iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
        }
    </style>
</head>

<body class="grey lighten-3">