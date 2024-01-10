<?php

get_header();

$post = get_post( get_the_ID() );
$slug = get_permalink();
$img_destaquemobile = get_image_prod( get_the_ID(), 'medium' );
$img_destaqueDesk = get_image_prod( get_the_ID(), 'large' );


?>
<div class="paginas mb-5">
	<div class="paginas__int container mt-5">
		<div class="row conteudo">
            <div class="col-12 col-md-7 header">
                <h1 class="m-0 text-uppercase"><?php the_title(); ?></h1>
            </div>


		</div>

        <div class="row conteudo">
            <div class="col-12 col-md-7 ms-auto conteudo__texto marco-single__conteudo">
                <div class="texto mt-3 mt-md-5">
			        <?php
			        if ( has_blocks( $post->post_content ) ) {
				        $blocks = parse_blocks( $post->post_content );

				        foreach ( $blocks as $block ) {
					        echo apply_filters( 'the_content', render_block( $block ) );
				        }
			        } else { //legado
				        echo apply_filters( 'the_content', $post->post_content );
			        }
			        ?>
                </div>

            </div>
        </div>
	</div>
</div>

<?php
get_footer();
?>
