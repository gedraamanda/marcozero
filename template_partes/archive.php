<?php
$paged   = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

if(is_tax('formatos') ) {
	$tax   = get_queried_object();
	$name  = $tax->name;

	$postPrincipal = new WP_Query( array(
		'post_type'      => 'post',
		'posts_per_page' => 1,
		'post_status'    => 'publish',
		'tax_query' => array(
			array (
				'taxonomy' => 'formatos',
				'field' => 'term_id',
				'terms' => $tax->term_id,
			)
		),
	) );

	$postListagem = new WP_Query( array(
		'post_type'      => 'post',
		'posts_per_page' => 6,
		'post_status'    => 'publish',
		'tax_query' => array(
			array (
				'taxonomy' => 'formatos',
				'field' => 'term_id',
				'terms' => $tax->term_id,
			)
		),
		'post__not_in'   => array($postPrincipal->post->ID)
	) );

} elseif(is_tax('temas')) {
	$tax   = get_queried_object();
	$name  = $tax->name;

	$postPrincipal = new WP_Query( array(
		'post_type'      => 'post',
		'posts_per_page' => 1,
		'post_status'    => 'publish',
		'tax_query' => array(
			array (
				'taxonomy' => 'temas',
				'field' => 'term_id',
				'terms' => $tax->term_id,
			)
		),
	) );

	$postListagem = new WP_Query( array(
		'post_type'      => 'post',
		'posts_per_page' => 6,
		'post_status'    => 'publish',
		'tax_query' => array(
			array (
				'taxonomy' => 'temas',
				'field' => 'term_id',
				'terms' => $tax->term_id,
			)
		),
		'post__not_in'   => array($postPrincipal->post->ID)
	) );
} elseif ( is_author() ) {
	$autor_id = get_user_by( 'slug', get_query_var( 'author_name' ) )->ID;
	$userData = get_userdata( $autor_id );
	$user     = get_user_meta( $autor_id );

	$formato    = get_query_var( 'authorformato' );
	$tema    = get_query_var( 'authortema' );

	$argsPrincipal = array(
		'post_type'      => array( 'post'),
		'posts_per_page' => 9,
		'post_status' => 'publish',
		'author' => $autor_id,
		'paged' => $paged
	) ;

	if(!empty($formato) || !empty($tema)) {
		if ( $formato != 'null' && $tema == 'null' ) { //tem formato e nao tem tema
			$argsPrincipal['tax_query'] = array(
				array(
					'taxonomy'     => 'formatos',
					'field' => 'slug',
					'terms' => $formato,
				),
			);
		}

		if ( $formato == 'null' && $tema != 'null' ) { //nao tem formato e tem tema
			$argsPrincipal['tax_query'] = array(
				array(
					'taxonomy'     => 'temas',
					'field' => 'slug',
					'terms' => $tema,
				),
			);
		}

		if ( $formato != 'null' && $tema != 'null' ) { // tem formato e tem tema
			$argsPrincipal['tax_query'] = array(
				'relation' => 'AND',
				array(
					'taxonomy'     => 'formatos',
					'field' => 'slug',
					'terms' => $formato,
				),
				array(
					'taxonomy'     => 'temas',
					'field' => 'slug',
					'terms' => $tema,
				),
			);
		}
	}

	$postListagem = new WP_Query($argsPrincipal);

	get_template_part( 'componentes/barra-busca', '');

} elseif ( is_tag() ) {
	$tag   = get_queried_object();
	$name = $tag->name;

	$postListagem = new WP_Query( array(
		'post_type'      => array( 'post'),
		'posts_per_page' => 9,
		'post_status' => 'publish',
		'tag_id' => $tag->term_id,
		'paged' => $paged
	) );

} elseif (is_search()) {
	$pesquisa = $_GET['s'];
	$name = $pesquisa;

	$postListagem = new WP_Query( array(
		'post_type'      => array( 'post'),
		'post_status'    => 'publish',
		's'              => $pesquisa,
		'posts_per_page' => 9,
		'paged'          => $paged
	) );
}

?>

<div class="marco-result">
	<div class="marco-result__destaque position-relative">
		<div class="container">
			<?php if ( is_author() ) { ?>
                <div class="row header-autor mt-5">
                    <div class="col-12 col-md-5">
                        <h1><?php echo $userData->data->display_name ?></h1>
                    </div>

                    <div class="col-12 col-md-5">
	                    <?php if ( ! empty( $user['description'] ) ) { ?>
                            <p class="m-0"><?php echo $user['description'][0] ?></p>
	                    <?php } ?>
                    </div>

                </div>
            <?php } else { ?>
                <div class="row row-cols-md-2">
                    <div class="d-flex flex-column texto">
                        <h1 class="m-0 text-uppercase mt-3"><?php echo $name ?></h1>

			            <?php if ( ! empty( $postPrincipal->post ) ) { ?>
                            <div class="imagem d-md-none mt-3">
                                <a href="<?php echo get_permalink( $postPrincipal->post->ID ) ?>">
						            <?php mz_imgDestaque($postPrincipal->post->ID, '', '', 'w-100'); ?>
                                </a>
                            </div>

                            <div class="d-flex flex-column ms-md-0 me-md-4 mt-3 mt-md-auto">
                                <a href="<?php echo get_permalink( $postPrincipal->post->ID ) ?>" class="text-uppercase tituloGrande mb-2"><?php echo $postPrincipal->post->post_title; ?></a>

					            <?php mz_linhaFina($postPrincipal->post->ID, '', 'linha-fina m-0'); ?>

					            <?php mz_detalhes($postPrincipal->post->ID, 'd-flex aling-items-center mt-2', 'mx-3'); ?>

					            <?php mz_tags($postPrincipal->post->ID, 'd-flex mt-3 mt-md-5 flex-wrap'); ?>
                            </div>
			            <?php } ?>

                    </div>

		            <?php if ( ! empty( $postPrincipal->post ) ) { ?>
                        <div class="imagem d-none d-md-block">
                            <a href="<?php echo get_permalink( $postPrincipal->post->ID ) ?>">
					            <?php mz_imgDestaque($postPrincipal->post->ID); ?>
                            </a>
                        </div>
		            <?php } ?>
                </div>
            <?php } ?>
        </div>
	</div>

	<?php if ( ! empty( $postListagem->posts ) ) { ?>
		<div class="container mt-5 pt-md-5">
			<div class="marco-result__listagem listagem col-10 mx-auto">
				<div class="row row-cols-1 row-cols-md-3 listagem__int">
					<?php foreach ( $postListagem->posts as $item ) {  ?>
						<div class="listagem-post">
							<div class="d-flex flex-column">
								<a href="<?php echo get_permalink($item->ID) ?>">
									<?php mz_imgDestaque($item->ID, 'medium', 'small', 'w-100'); ?>
								</a>

								<a href="<?php echo get_permalink($item->ID) ?>" class="titulo mt-3"><?php echo $item->post_title ?></a>

								<?php mz_tags($item->ID, 'd-flex mt-4 flex-wrap'); ?>
							</div>

						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php }
	wp_pagenavi(array( 'query' => $postListagem ));
    ?>
</div>
