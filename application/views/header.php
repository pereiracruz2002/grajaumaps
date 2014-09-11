<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mapa de lojas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script>var base_url = "<?php echo base_url() ?>";</script>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body class="gisharegular">
        <div class="wrapper">
            <header class="container-header">
                <h1 class="logo-facileme"><a class="ir" href="<?=base_url()?>">Fácileme social commerce</a></h1>
                <div class="content-info gisharegular"><p>Conheça algumas das <?php echo number_format($totalLojas, 0, '','.') ?> de nossas lojas</p></div>
            </header>  
        </div>



    </head>
    <body>
