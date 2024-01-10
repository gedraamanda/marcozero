<?php
/* Template Name: Quem faz */

get_header();

$post = get_post( get_the_ID() );
$slug = get_permalink();

$users = get_users( array(
	'orderby'    => 'name',
) );
?>

<div class="paginas mb-5">
    <div class="paginas__int container mt-5">
        <div class="row conteudo">
            <div class="col-12 col-md-4 header">
                <h1 class="m-0 text-uppercase"><?php the_title(); ?></h1>
            </div>

            <div class="col-12 col-md-7 conteudo__texto marco-single__conteudo">

                <div class="texto mt-2 mt-md-5">
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

        <div class="quem-somos my-3 my-md-5 pb-5">
            <div class="row row-cols-md-3 row-cols-1">
                <?php foreach ( $users as $user ) {
	                $us = get_user_meta( $user->ID );
	                $usuarioAvatar  = get_avatar_url( $user->ID, array( 'size' => 220 ) );
                    $inativo = get_field('user_inativo', 'user_'.$user->ID);

                    if(empty($inativo) || $inativo === false) { ?>
                        <div class="pessoa">
                            <div class="pessoa__img text-center py-4">
                                <picture>
                                    <img src="<?php echo $usuarioAvatar ?>" loading="lazy" />
                                </picture>
                            </div>

                            <div class="pessoa__txt mt-2">
                                <div class="d-flex flex-column">
                                    <p class="nome m-0"><?php echo $user->data->display_name ?></p>

				                    <?php if ( ! empty( $us['description'] ) ) {
					                    $out = strlen($us['description'][0]) > 100 ? substr($us['description'][0],0,100)."..." : $us['description'][0];
					                    ?>
                                        <p class="desc w-75"><?php echo $out ?></p>
				                    <?php } ?>

                                    <div>
                                        <a href="<?php echo get_author_posts_url( $user->ID ) ?>" class="btn">TEXTOS PUBLICADOS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
