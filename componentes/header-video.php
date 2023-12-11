<?php
$postId = get_the_ID();

$categoria = get_the_category( $postId );
$corCat    = mz_catCores( $categoria[0]->slug );
$linhaFina = get_field( 'post_linhafina', $postId );

$video = get_field( 'post_videodestaque', $postId );
$videoId = mz_youtubeId($video);

?>

<div class="marco-videos">
	<header style="--bg-color: <?php echo $corCat ?>;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-10 mx-auto">
					<div class="wrapper mx-auto">
						<div class="youtube" data-embed="<?php echo $videoId ?>">
							<div class="play-button"></div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-9 col-md-6 mx-auto">
					<div class="texto d-flex flex-column text-center">
						<h1 class="m-0 text-uppercase mb-2 titulo w-100"><?php the_title(); ?></h1>

						<?php mz_detalhes($postId, 'd-flex flex-column flex-md-row aling-items-center mt-2 justify-content-center', 'mx-3 d-none d-md-inline-block'); ?>

						<?php mz_tags($postId, 'd-flex mt-4 justify-content-center flex-wrap', 2); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>