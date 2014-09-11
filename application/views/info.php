<section class="content-lojas">
    <header>
        <img src="<?=($loja->logo ? SITE_URL.'uploads/'.$loja->logo : '//graph.facebook.com/'.$loja->fan_page.'/picture?type=square') ?>" alt="<?php echo $loja->titulo ?>" title="<?php echo $loja->titulo ?>">
        <h1><?php echo $loja->titulo ?></h1>
    </header>
    <ul class="detalhes">
        <li><span class="icon"><i class="fa fa-map-marker fa-2x"></i></span> <span class="arrow"></span> <span class="middle"><?php echo $loja->cidade ?></span></li>
        <?php if ($loja->email): ?>
<?php /*
        <li class="email"><span class="icon"><i class="fa fa-envelope fa-2x"></i></span> <span class="arrow"></span> <span class="middle"><?php echo $loja->email ?></span></li>
*/ ?>
        <?php endif; ?>
    </ul>
	<div class="content-btn">
        <a href="https://www.facebook.com/<?php echo $loja->fan_page ?>?sk=app_305990076116431" target="_blank" class="btn-ir-loja">Acessar Loja</a>
	</div>
</section>
