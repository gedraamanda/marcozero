<?php
$cor =  !empty($args['cor']) ? $args['cor'] : '#FF5E30';

$temas = get_terms( array(
	'taxonomy'   => 'temas',
	'hide_empty' => false
) );

$formatos = get_terms( array(
	'taxonomy'   => 'formatos',
	'hide_empty' => false
) );
?>

<div class="barra-busca py-2" style="--cat-color: <?php echo $cor ?>;">
	<div class="container">
		<div class="row row-cols-2">
			<div class="item">
				<a href="#" class="nome open-temas">TEMAS <i></i></a>

				<div class="busca-abre"></div>
			</div>

			<div class="item">
				<a href="#" class="nome open-formato">FORMATOS <i></i></a>
			</div>
		</div>
	</div>

	<?php if ( ! empty( $temas ) ) { ?>
		<div class="busca-abre abre-temas">
			<div class="int p-4">
				<div class="d-flex flex-column ">
					<?php foreach ( $temas as $tem ) { ?>
						<a href="<?php echo get_term_link($tem->term_id, 'temas') ?>" class="text-uppercase"><?php echo $tem->name ?></a>
					<?php } ?>

				</div>

			</div>
		</div>
	<?php } ?>

	<?php if ( ! empty( $formatos ) ) { ?>
		<div class="busca-abre abre-formato">
			<div class="int p-4">
				<div class="d-flex flex-column ">
					<?php foreach ( $formatos as $form ) { ?>
						<a href="<?php echo get_term_link($form->term_id, 'formatos') ?>" class="text-uppercase"><?php echo $form->name ?></a>
					<?php } ?>
				</div>

			</div>
		</div>
	<?php } ?>
</div>