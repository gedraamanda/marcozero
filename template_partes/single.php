<?php
$postId   = get_the_ID();
$postData = get_post( $postId );

$categoria = get_the_category( $postId );
$corCat    = mz_catCores( $categoria[0]->slug );

$abertura    = get_field( 'post_abertura', $postId );
$creditoPost = get_field( 'post_creditopost', $postId );

//podcast
if ( has_term( 'podcast', 'formatos' ) ) {
	$capaPod = get_field( 'img_podcast', $postId );
	$descPod = get_field( 'desc_podcast', $postId );
	$epsPod  = get_field( 'ep_podcast', $postId );
}

$tema = get_the_terms( $postId, 'temas' );
?>

<div class="marco-single">
    <?php
	//header dos posts
	if ( ! empty( $abertura ) ) {
		get_template_part( 'componentes/header-' . $abertura );
	} else {
		get_template_part( 'componentes/header-vertical' );
	} ?>

    <div class="marco-single__conteudo mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="texto ms-md-5">
	                    <?php if ( has_term( 'podcast', 'formatos' ) && !empty($capaPod) ) { ?>
                            <div class="d-flex single-podcast align-items-md-center mb-4">
                                <img src="<?php echo $capaPod['url'] ?>" alt="Capa do podcast" class="">

                                <?php if ( ! empty( $descPod ) ) { ?>
                                    <p class="m-0 ms-3 mx-md-5"><?php echo $descPod ?></p>
                                <?php }?>
                            </div>
                        <?php }


	                    if ( has_blocks( $postData->post_content ) ) {
		                    $blocks = parse_blocks( $postData->post_content );

		                    foreach ( $blocks as $block ) {
			                    echo apply_filters( 'the_content', render_block( $block ) );
		                    }
	                    } else { //legado
		                    echo apply_filters( 'the_content', $postData->post_content );
	                    }
	                    ?>

                        <!--autores-->
                        <?php
                        $autores = get_coauthors($postId);

                        ?>
                        <div class="single-autor py-3 my-4">
                            <span class="mb-1 d-block"><?php echo count($autores) > 1 ? 'AUTORES' : 'AUTOR' ?></span>

                            <?php foreach ( $autores as $i => $autor ) {
	                            $user = get_user_meta( $autor->data->ID );
	                            $usuarioAvatar  = get_avatar_url( $autor->data->ID, array( 'size' => 105 ) );  ?>
                                <div class="single-autor__pessoa <?php echo $i != 0 ? 'mt-4' : '' ?>">
                                    <div class="d-flex">
                                        <img src="<?php echo $usuarioAvatar ?>" alt="Foto <?php echo $autor->data->display_name ?>">

                                        <div class="d-flex flex-column ms-3">
                                            <a href="<?php echo get_author_posts_url( $autor->data->ID ) ?>"><?php echo $autor->data->display_name ?></a>

                                            <?php if(!empty($user['description'])) { ?>
                                                <p class="m-0"><?php echo $user['description'][0] ?></p>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>


	                   <?php

                        if ( ! empty( $creditoPost ) ) { ?>
                            <div class="apoio my-5 pt-2">
                               <?php echo $creditoPost ?>
                            </div>
                        <?php }

	                   if ( has_term( 'podcast', 'formatos' ) && ! empty( $epsPod ) ) { ?>
                            <div class="end-podcast mb-4 mb-md-5 pb-md-5">
                                <div class="siga text-center mx-auto">
                                    <span class="siga-titulo m-0">SIGA E OUÇA NO SEU APLICATIVO PREFERIDO</span>

                                    <div class="d-flex agreg justify-content-between mt-3">
	                                    <?php if ( ! empty( $epsPod['spotify'] ) ) { ?>
                                            <div class="spot d-flex flex-column">
                                                <a href="<?php echo $epsPod['spotify'] ?>" target="_blank"><i></i></a>

                                                <a href="<?php echo $epsPod['spotify'] ?>" target="_blank" class="titulo mt-auto">Spotify</a>
                                            </div>
	                                    <?php } ?>

                                        <?php if ( ! empty( $epsPod['google'] ) ) { ?>
                                            <div class="google d-flex flex-column">
                                                <a href="<?php echo $epsPod['google'] ?>" target="_blank"><i></i></a>

                                                <a href="<?php echo $epsPod['google'] ?>" target="_blank" class="titulo mt-auto">Google Cast</a>
                                            </div>
	                                    <?php } ?>

	                                    <?php if ( ! empty( $epsPod['youtube'] ) ) { ?>
                                            <div class="you d-flex flex-column">
                                                <a href="<?php echo $epsPod['youtube'] ?>" target="_blank"><i></i></a>

                                                <a href="<?php echo $epsPod['youtube'] ?>" target="_blank" class="titulo mt-auto">Youtube</a>
                                            </div>
	                                    <?php } ?>


                                    </div>
                                </div>

                                <div class="outros mt-5 position-relative">
                                    <span class="siga-titulo m-0 text-uppercase d-block text-center">ouça outros episódios do podcast</span>

                                    <div class="slider-control-pod d-flex" aria-label="Carousel Navigation" tabindex="0">
                                        <a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

                                        <a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
                                    </div>

                                    <div class="pod-outros-sl mt-3">
                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

	                    <?php $tags = wp_get_post_tags( $postId );

	                    if ( ! empty( $tags ) ) { ?>
                            <div class="tags d-flex mt-4 align-items-center flex-wrap">
                                <span class="me-2 d-none d-md-inline-block">TAGS</span>

                                <?php
                                $output = array_slice( $tags, 0, 3 );

                                foreach ( $output as $tag ) { ?>
                                    <a href="<?php echo get_tag_link($tag->term_id) ?>" class="btn text-uppercase me-2"><?php echo$tag->name ?></a>
                                <?php } ?>
                            </div>
	                    <?php } ?>

                        <div class="social d-none d-md-flex align-items-center mt-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($postId) ?>" target="_blank" class="facebook"></a>
<!--                            <a href="" class="instagram"></a>-->
                            <a href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($postId) ?> - <?php echo get_permalink($postId) ?>" target="_blank" class="twitter"></a>
                            <a href="" class="youtube-m"></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 sidebar d-none d-md-block">
                    <div class="d-flex flex-column ms-auto">
                        <div class="d-flex ms-auto">
                            <div class="social d-flex align-items-center">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($postId) ?>" target="_blank" class="facebook"></a>
<!--                                <a href="" class="instagram"></a>-->
                                <a href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($postId) ?> - <?php echo get_permalink($postId) ?>" target="_blank" class="twitter"></a>
                                <a href="" class="youtube-m"></a>
                            </div>

                            <a href="#" class="apoie less apoie-click ms-3">APOIE</a>
                        </div>

<!--                        <div class="mt-3">-->
<!--                            <a href="https://marcozero.us18.list-manage.com/subscribe/post?u=6903930ec168971e947bb728b&id=c1b8b74962" target="_blank" class="apoie less bg-blue text-light">ASSINE NOSSA NEWSLETTER</a>-->
<!--                        </div>-->
                    </div>


                    <?php if ( has_term('podcast', 'formatos') ) {
		                $postListagem = new WP_Query( array(
			                'post_type'      => 'post',
			                'posts_per_page' => 3,
			                'post_status'    => 'publish',
			                'tax_query' => array(
				                array (
					                'taxonomy' => 'formatos',
					                'field' => 'slug',
					                'terms' => 'podcast',
				                ),
			                ),
			                'post__not_in'   => array( $postId )
		                ) );


		                if ( ! empty( $postListagem->posts ) ) { ?>
                            <div class="mais-pod ms-auto me-5">
                                <span class="mais-titulo m-0 text-uppercase">outros podcasts</span>

                                <div class="d-flex flex-column mt-3">
                                    <?php foreach ( $postListagem->posts as $postPod ) {
	                                    $capaPod = get_field( 'img_podcast', $postPod->ID ); ?>

                                        <div class="mais-pod__post d-flex flex-column">
                                            <a href="<?php echo get_permalink($postPod->ID) ?>">
	                                            <?php if ( ! empty( $capaPod ) ) { ?>
                                                    <img src="<?php echo $capaPod['url'] ?>" alt="">
	                                            <?php } else { ?>
		                                            <?php mz_imgDestaque($postPod->ID, 'medium', 'small'); ?>
	                                            <?php } ?>

                                            </a>

                                            <div class="d-flex mt-2">
                                                <a href="<?php echo get_permalink($postPod->ID) ?>">
                                                    <i></i>
                                                </a>

                                                <a href="<?php echo get_permalink($postPod->ID) ?>" class="titulo"><?php echo $postPod->post_title ?></a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php }
	                } else {


		                $postsR = get_posts( array( 'numberposts' => 3,'orderby'          => 'date',
		                                           'order'            => 'DESC', ) );


		                if ( ! empty( $postsR ) ) { ?>
                            <div class="mais-recentes ms-auto">
                                <span class="mais-titulo m-0 text-uppercase">AS MAIS RECENTES</span>

                                <div class="d-flex flex-column mt-3">
                                    <?php foreach ( $postsR as $rec ) { ?>
                                        <div class="mais-recentes__post d-flex flex-column mb-5">
                                            <a href="<?php echo get_permalink($rec->ID) ?>">
	                                            <?php mz_imgDestaque($rec->ID, 'large', 'medium', '') ?>
                                            </a>

                                            <a href="<?php echo get_permalink($rec->ID) ?>" class="titulo mt-2"><?php echo $rec->post_title ?></a>

                                            <?php mz_detalhes($rec->ID, 'd-flex aling-items-center mt-2', '', false) ?>

	                                        <?php mz_tags($rec->ID, 'd-flex flex-wrap mt-3', 2) ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php }
	                } ?>

                    <div class="caixa-apoie ms-auto">
                        <div class="d-flex flex-column text-center">
                            <div>
                                <a href="/assine/" class="btn titulo">APOIE</a>
                            </div>

                            <h4 class="m-0 mt-3 mb-2 pb-2">O JORNALISMO QUE ESTÁ DO SEU LADO</h4>

                            <p class="m-0 mb-3">DOAR PARA A MARCO ZERO É MUITO FÁCIL.</p>

                            <div>
                                <a href="/assine/" class="btn saiba">SAIBA MAIS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if ( ! empty( $tema[0] ) ) {
        $postsRelacionados = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'tax_query' => array(
                array (
                    'taxonomy' => 'temas',
                    'field' => 'term_id',
                    'terms' => $tema[0]->term_id,
                )
            ),
            'post__not_in'   => array( $postId )
        ) );

        if ( ! empty( $postsRelacionados->posts ) ) { ?>
            <div class="relacionadas py-4">
                <div class="container">
                    <div class="mx-md-5">
                        <h3 class="m-0 text-uppercase">publicações relacionadas</h3>

                        <div class="row row-cols-3 mt-3 int">
                            <?php foreach ( $postsRelacionados->posts as $rel ) { ?>
                                <div class="relacionadas__post">
                                    <div class="d-flex flex-column">
                                        <a href="<?php echo get_permalink($rel->ID) ?>">
                                            <?php mz_imgDestaque($rel->ID, 'large', 'medium', 'w-100') ?>
                                        </a>

                                        <a href="<?php echo get_permalink($rel->ID) ?>" class="titulo mt-3"><?php echo $rel->post_title ?></a>

                                        <?php mz_tags($rel->ID, 'd-flex mt-4', 2) ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="slider-control slider-control-rel d-flex d-md-none" aria-label="Carousel Navigation" tabindex="0">
                            <a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

                            <a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
                        </div>
                    </div>

                </div>
            </div>
        <?php }
    }


    $tituloSug = get_field( 'titulo', 'sugestoes' );
    $postsSug  = get_field( 'posts', 'sugestoes' );


    if ( ! empty( $postsSug ) ) {
    shuffle( $postsSug );
    $outputSug = array_slice( $postsSug, 0, 3 );
        ?>
        <div class="relacionadas sugestao mt-5 py-4">
            <div class="container">
                <div class="mx-5 position-relative">
                    <h3 class="m-0 text-uppercase"><?php echo ! empty( $tituloSug ) ? $tituloSug : 'sugestão do editor' ?></h3>

                    <div class="slider-control slider-control-rel d-flex d-md-none" aria-label="Carousel Navigation" tabindex="0">
                        <a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

                        <a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
                    </div>

                    <div class="row row-cols-3 mt-3 int">
                        <?php foreach ( $outputSug as $item ) { ?>
                            <div class="relacionadas__post">
                                <div class="d-flex flex-column">
                                    <a href="<?php echo get_permalink($item['item']->ID) ?>">
	                                    <?php mz_imgDestaque($item['item']->ID, 'large', 'large', 'w-100'); ?>
                                    </a>

                                    <a href="<?php echo get_permalink($item['item']->ID) ?>" class="titulo mt-3"><?php echo $item['item']->post_title ?></a>

	                                <?php mz_tags($item['item']->ID, 'd-flex mt-4', 2); ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
        </div>
    <?php } ?>

</div>
