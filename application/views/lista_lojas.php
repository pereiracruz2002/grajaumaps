<ul class="content-lojas">
    <?php $temp_letra = ''; foreach ($dados as $item): $letra = strtolower(substr($item->titulo, 0,1));?>
    <?php if ($letra != $temp_letra): ?>
    <li id="<?php echo $letra ?>" class="title text-left"><?php echo strtoupper($letra) ?></li>
    <?php endif; ?>
    <li class="loja_">
        <a href="<?php echo site_url('lojas/info/'.$item->id_parceiro) ?>">
            <span class="border-img">
            <img src="//graph.facebook.com/<?php echo $item->fan_page ?>/picture?type=square" alt="<?php echo $item->titulo ?>" title="<?php echo $item->titulo ?>" width="50" height="50" />
            </span>
            <p>
                <strong><?php echo $item->titulo ?></strong>
                <span><?php echo $item->cidade ?></span>
            </p>
        </a>
    </li>
    <?php $temp_letra = $letra; endforeach; ?>
</ul>
