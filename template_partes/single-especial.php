<?php
$postId = get_the_ID();

$postData    = get_post( $postId );
$imgDestaque = get_image_prod( $postId, 'full' );

?>

<div class="marco-especial marco-single">
	<div class="capa panel blue">
		<img src="<?php echo $imgDestaque ?>" alt="" class="w-100 hw-100">
	</div>

	<div class="marco-single__conteudo marco-especial__conteudo mt-5 pt-md-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7">
					<div class="texto ms-md-5">
						<h1 class="m-0 text-uppercase mb-4"><?php the_title(); ?></h1>

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



						<div class="tags d-flex mt-4 align-items-center flex-wrap">
							<span class="me-2">TAGS</span>
							<a href="#" class="btn text-uppercase me-2">socioambiental</a>
							<a href="#" class="btn text-uppercase me-2">energia</a>
							<a href="#" class="btn text-uppercase">reportagem</a>
						</div>

						<div class="social d-flex align-items-center mt-4">
							<a href="" class="facebook"></a>
							<a href="" class="instagram"></a>
							<a href="" class="twitter"></a>
							<a href="" class="youtube-m"></a>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4 offset-md-1 d-none d-md-block">
					<div class="sidebar ms-auto">
						<div class="guia">
							<div class="d-flex flex-column">
								<span>CAPÍTULOS</span>
                                <div class="navegue d-flex flex-column">

                                </div>

							</div>
						</div>

						<div class="d-flex flex-column mt-5" style="width: max-content;">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>