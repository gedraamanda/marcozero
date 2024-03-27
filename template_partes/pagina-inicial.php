<?php
$home_blocos = get_field( 'home', 'home' );
?>

<div class="marco-home mb-5 pb-5">
    <?php
    if ( ! empty( $home_blocos ) ) {
	    foreach ( $home_blocos as $i => $bloco ) {
            $tipo = $bloco['acf_fc_layout'];

		    get_template_part( 'render/home/'.$tipo, '', $bloco);

        }
    }
    ?>
</div>