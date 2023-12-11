<?php
$bloco = $args;

?>

<section class="opiniao container">
	<div class="opiniao__int mx-2 mx-md-5">
		<div class="d-flex align-items-center mt-4">
			<h2 class="tituloSessao text-uppercase"><?php echo $bloco['titulo'] ?></h2>

			<a href="<?php echo $bloco['link'] ?>" class="apoie reg ms-auto text-uppercase">ver mais</a>
		</div>

		<div class="opiniao__posts d-flex flex-column">
			<?php foreach ( $bloco['posts'] as $item ) {
				$post   = $item['post'];
				$titulo = ! empty( $item['titulo_alternativo'] ) ? $item['titulo_alternativo'] : $post->post_title;
				$categoria = get_the_category($post->ID);
				?>

				<div class="item d-flex flex-column flex-md-row align-items-md-center">
					<a href="<?php echo get_permalink($post->ID) ?>" class="titulo me-5"><?php echo $titulo ?></a>

					<?php mz_detalhes($post->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2 mt-md-2', 'd-none'); ?>

					<div class="ms-md-auto mt-2 mt-md-0">
						<a href="<?php echo get_category_link($categoria[0]->term_id) ?>" class="btn text-uppercase"><?php echo $categoria[0]->name ?></a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
