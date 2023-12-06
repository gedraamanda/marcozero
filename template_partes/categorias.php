<?php
$categoria   = get_queried_object();
$catId = $categoria->term_id;

$postPrincipal = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => 1,
	'post_status'    => 'publish',
	'cat'            => $catId
) );

$postListagem = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => 6,
	'post_status'    => 'publish',
	'cat'            => $catId,
	'post__not_in'   => array($postPrincipal->post->ID)
) );

$cor = mz_catCores($categoria->slug);
get_template_part( 'componentes/barra-busca', '', array('cor' => $cor));
?>

<div class="marco-result">
    <div class="marco-result__destaque position-relative">
        <div class="container">
            <div class="row row-cols-md-2">
                <div class="d-flex flex-column texto">
                    <h1 class="m-0 text-uppercase mt-3"><?php echo $categoria->name ?></h1>

	                <?php if ( ! empty( $postPrincipal->post ) ) { ?>
                        <div class="imagem d-md-none mt-3">
                            <a href="<?php echo get_permalink( $postPrincipal->post->ID ) ?>">
                                <?php mz_imgDestaque($postPrincipal->post->ID, '', '', 'w-100'); ?>
                            </a>
                        </div>

                        <div class="d-flex flex-column mx-md-4 mt-3 mt-md-auto">
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
	<?php } ?>
</div>