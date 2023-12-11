<?php
$home_blocos = get_field( 'home', 'home' );
?>

<div class="marco-home">
    <?php
    if(!empty($home_blocos)) {
	    foreach ( $home_blocos as $bloco ) {
            $tipo = $bloco['acf_fc_layout'];

		    get_template_part( 'render/home/'.$tipo, '', $bloco);
        }
    }
    ?>
</div>