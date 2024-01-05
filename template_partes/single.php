<?php
$postId   = get_the_ID();
$postData = get_post( $postId );

$categoria = get_the_category( $postId );
$corCat    = mz_catCores( $categoria[0]->slug );

$abertura    = get_field( 'post_abertura', $postId );
$creditoPost = get_field( 'post_creditopost', $postId );


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
	                    <?php
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


	                    <?php if ( isset( $abertura ) && $abertura === 'podcast' ) { ?>
                            <div class="d-flex single-podcast align-items-md-center mb-4">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="" class="">

                                <p class="m-0 ms-3 mx-md-5">Podcast de análise e opinião sobre os fatos mais importantes da semana pela equipe de Marco Zero Conteúdo, coletivo de jornalismo independente e investigativo do Recife</p>
                            </div>
                        <?php }

                        if ( ! empty( $creditoPost ) ) { ?>
                            <div class="apoio my-5 pt-2">
                               <?php echo $creditoPost ?>
                            </div>
                        <?php }

                        if ( isset( $abertura ) && $abertura === 'podcast' ) { ?>
                            <div class="end-podcast mb-4 mb-md-5 pb-md-5">
                                <div class="siga text-center mx-auto">
                                    <span class="siga-titulo m-0">SIGA E OUÇA NO SEU APLICATIVO PREFERIDO</span>

                                    <div class="d-flex agreg justify-content-between mt-3">
                                        <div class="spot d-flex flex-column">
                                            <a href=""><i></i></a>

                                            <a href="" class="titulo mt-auto">Spotify</a>
                                        </div>

                                        <div class="google d-flex flex-column">
                                            <a href=""><i></i></a>

                                            <a href="" class="titulo mt-auto">Google Cast</a>
                                        </div>

                                        <div class="you d-flex flex-column">
                                            <a href=""><i></i></a>

                                            <a href="" class="titulo mt-auto">Youtube</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="outros mt-5 position-relative">
                                    <span class="siga-titulo m-0 text-uppercase d-block text-center">ouça outros episódios do podcast arrumadinho</span>

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
                            <a href="" class="facebook"></a>
                            <a href="" class="instagram"></a>
                            <a href="" class="twitter"></a>
                            <a href="" class="youtube-m"></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 sidebar d-none d-md-block">
                    <div class="d-flex flex-column ms-5" style="width: max-content;">
                        <div class="d-flex">
                            <div class="social d-flex align-items-center">
                                <a href="" class="facebook"></a>
                                <a href="" class="instagram"></a>
                                <a href="" class="twitter"></a>
                                <a href="" class="youtube-m"></a>
                            </div>

                            <a href="#" class="apoie less ms-auto">APOIE</a>
                        </div>

                        <div class="mt-3">
                            <a href="" class="apoie less bg-blue text-light">ASSINE NOSSA NEWSLETTER</a>
                        </div>
                    </div>

	                <?php if ( isset( $abertura ) && $abertura === 'podcast' ) { ?>
                        <div class="mais-pod ms-auto me-5">
                            <span class="mais-titulo m-0 text-uppercase">outros podcasts</span>

                            <div class="d-flex flex-column mt-3">
                                <div class="mais-pod__post d-flex flex-column">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                    </a>

                                    <div class="d-flex mt-2">
                                        <a href="">
                                            <i></i>
                                        </a>

                                        <a href="#" class="titulo">E na rua que se enfrenta o Bolsonarismo</a>
                                    </div>
                                </div>

                                <div class="mais-pod__post d-flex flex-column">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="">
                                    </a>

                                    <div class="d-flex mt-2">
                                        <a href="">
                                            <i></i>
                                        </a>

                                        <a href="#" class="titulo">E na rua que se enfrenta o Bolsonarismo</a>
                                    </div>

                                </div>

                                <div class="mais-pod__post d-flex flex-column">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                    </a>


                                    <div class="d-flex mt-2">
                                        <a href="">
                                            <i></i>
                                        </a>

                                        <a href="#" class="titulo">E na rua que se enfrenta o Bolsonarismo</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } else {
		                $postsRecentes = new WP_Query( array(
			                'post_status'    => 'publish',
			                'post_type'      => 'post',
			                'posts_per_page' => 1 ,
		                ) );

		                if ( ! empty( $postsRecentes->posts ) ) { ?>
                            <div class="mais-recentes ms-auto">
                                <span class="mais-titulo m-0 text-uppercase">AS MAIS RECENTES</span>

                                <div class="d-flex flex-column mt-3">
                                    <?php foreach ( $postsRecentes->posts as $rec ) { ?>
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
                </div>
            </div>
        </div>
    </div>

    <?php
    $postsRelacionados = new WP_Query( array(
	    'post_type'      => 'post',
	    'posts_per_page' => 3,
	    'post_status'    => 'publish',
	    'cat'            => $categoria[0]->term_id
    ) );

    if ( ! empty( $postsRelacionados->posts ) ) { ?>
        <div class="relacionadas py-4">
            <div class="container">
                <div class="mx-md-5">
                    <h3 class="m-0 text-uppercase">publicações relacionadas</h3>

                    <div class="<?php echo !wp_is_mobile() ? 'row row-cols-3' : '' ?> mt-3 int">
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
    <?php } ?>


    <div class="relacionadas sugestao mt-5 py-4">
        <div class="container">
            <div class="mx-5 position-relative">
                <h3 class="m-0 text-uppercase">sugestão do editor</h3>

                <div class="slider-control slider-control-rel d-flex d-md-none" aria-label="Carousel Navigation" tabindex="0">
                    <a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

                    <a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
                </div>

                <div class="<?php echo !wp_is_mobile() ? 'row row-cols-3' : '' ?> mt-3 int">
                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel1.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>

                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel2.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>

                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel3.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
