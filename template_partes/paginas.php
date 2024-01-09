<?php

get_header();

$post = get_post( get_the_ID() );
$slug = get_permalink();
$img_destaquemobile = get_image_prod( get_the_ID(), 'medium' );
$img_destaqueDesk = get_image_prod( get_the_ID(), 'large' );


?>
<div class="single paginas mb-5">
	<div class="single__int container mt-5">
		<div class="row conteudo">
            <div class="col-4">
                <h1 class="m-0"><?php the_title(); ?></h1>
            </div>

			<div class="col-12 col-md-7 conteudo__texto">
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

<?php
get_footer();
?>
