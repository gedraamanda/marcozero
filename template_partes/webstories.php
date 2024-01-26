<?php
$postListagem = new WP_Query( array(
	'post_type'      => 'web-story',
	'posts_per_page' => 8,
	'post_status'    => 'publish',
) );


//get_template_part( 'componentes/barra-busca', ''); ?>

<div class="marco-result container">
    <div class="marco-result__destaque position-relative">

        <div class="row row-cols-md-2">
            <div class="d-flex flex-column texto">
                <h1 class="m-0 text-uppercase mt-3">webstories</h1>
            </div>
        </div>

	    <?php if ( ! empty( $postListagem->posts ) ) { ?>
            <div class="marco-result__listagem listagem mx-5 mt-3 mt-md-5">
                <div class="row row-cols-md-4 listagem__int">
                    <?php foreach ( $postListagem->posts as $item ) { ?>
                        <div class="listagem-post">
                            <a href="<?php echo get_permalink($item->ID) ?>">
	                            <?php mz_imgDestaque($item->ID, '', '', 'w-100'); ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

    </div>
</div>