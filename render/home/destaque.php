<?php
$bloco = $args;

$post = $bloco['post'];

$titulo    = ! empty( $bloco['titulo_alternativo'] ) ? $bloco['titulo_alternativo'] : $post->post_title;
$linhaFina = ! empty( $bloco['linhafina_alternativa'] ) ? $bloco['linhafina_alternativa'] : get_field( 'post_linhafina', $post->ID );
$img       = $bloco['imagem_alternativa'];

$categoria = get_the_category($post->ID);

?>

<section class="especial position-relative">
	<div class="d-flex h-100 pt-md-3">
		<div class="especial__texto especial__texto py-4 py-md-5 px-5 px-md-0">
			<div class="d-flex flex-column int mx-auto">
				<a href="<?php echo get_category_link( $categoria[0]->term_id ) ?>" class="cat text-uppercase"><?php echo $categoria[0]->name ?></a>

				<a href="<?php echo get_permalink($post->ID) ?>" class="titulo text-uppercase tituloGrande my-2"><?php echo $titulo ?></a>

				<?php if ( ! empty( $linhaFina ) ) { ?>
					<a href="<?php echo get_permalink( $post->ID ) ?>">
						<p class="linha-fina m-0 linhaFinaPd"><?php echo $linhaFina ?></p>
					</a>
				<?php } ?>

				<?php mz_detalhes($post->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2 flex-wrap', 'mx-3 d-none d-md-inline-block'); ?>

				<?php mz_tags($post->ID, 'd-flex mt-5 pt-md-4 flex-wrap'); ?>

			</div>
		</div>

		<div class="especial__imagem ms-auto">
			<?php if(!empty($img)) { ?>
				<picture>
					<source media="(max-width: 799px)" srcset="<?php echo $img['sizes']['large'] ?>">
					<source media="(min-width: 800px)" srcset="<?php echo $img['url'] ?>">
					<img src="<?php echo $img['url'] ?>" alt="<?php echo !empty($img['alt']) ? str_replace('"', '', $img['alt']) : '' ?>" class="w-100" loading="lazy">
				</picture>
			<?php } else {
				mz_imgDestaque($post->ID, 'large', 'large', 'w-100');
			} ?>

		</div>
	</div>

</section>
