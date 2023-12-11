<?php
$post      = get_sub_field( 'post' );
$titulo    = get_sub_field( 'titulo_alternativo' );
$linhaFina = get_sub_field( 'linhafina_alternativa' );
$img       = get_sub_field( 'imagem_alternativa' );

$categoria = get_the_category($post->ID);

?>

<div class="marco-home">
	<section class="especial position-relative">
		<div class="d-flex h-100 pt-md-3">
			<div class="especial__texto especial__texto py-4 py-md-5 px-5 px-md-0">
				<div class="d-flex flex-column int mx-auto">
					<a href="" class="cat text-uppercase"><?php echo $categoria[0]->name ?></a>

					<a href="#" class="titulo text-uppercase tituloGrande my-2"><?php echo !empty($titulo) ? $titulo : $post->post_title ?></a>

					<a href="">
						<p class="linha-fina m-0 linhaFinaPd"><?php echo !empty($linhaFina) ? $linhaFina : get_field('post_linhafina', $post->ID) ?></p>
					</a>

					<?php mz_detalhes($post->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2 flex-wrap', 'mx-3 d-none d-md-inline-block'); ?>


					<div class="tags d-flex mt-5 pt-md-4 flex-wrap">
						<a href="#" class="btn text-uppercase me-2">direitos humanos</a>
						<a href="#" class="btn text-uppercase me-2">maternidade</a>
						<a href="#" class="btn text-uppercase">pernambuco</a>
					</div>
				</div>
			</div>

			<div class="especial__imagem ms-auto">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/home1.png" alt="home1">
			</div>
		</div>

	</section>
</div>