<?php
//render os iframes do conteudo
add_filter( 'render_block_core/shortcode', 'mz_renderIframe', 10, 2 );
function mz_renderIframe( $block_content, $block ) {
	$str = preg_replace('!<p>(.*?)</p>!Uis', '$1', $block_content); ?>

	<div class="ratio ratio-16x9 my-4">
		<?php echo $str ?>
	</div>

<?php }

//novas imagens
add_filter( 'render_block_core/image', 'mz_renderImage', 10, 2 );
function mz_renderImage( $block_content, $block ) {
	if(!is_admin() && !wp_is_json_request() && empty($block['attrs']['data-id'])) {
		$attr = $block['attrs'];

		if ( ! isset( $attr['caption'] ) ) {
			if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $block_content, $matches ) ) {
				$block_content         = $matches[1];
				$attr['caption'] = trim( $matches[2] );
			}
		}

		$attachment_metadata = wp_get_attachment_metadata( $attr['id'] );

		$size = $attr['width'];

		$sizeNum = intval(str_replace('px', '', $size));

		$legenda = strip_tags( $attr['caption'] );

		if ( get_field( 'img_credito', $attr['id'] ) ) {
			$credito = get_field( 'img_credito', $attr['id'] );
		} else if ( ! empty( $attachment_metadata->credito_da_imagem ) ) {
			$credito = $attachment_metadata->credito_da_imagem;
		}

		$img_destaqueDesk = wp_get_attachment_image_src( $attr['id'], 'large' )[0];
		$img_srcMobile = wp_get_attachment_image_src( $attr['id'], 'medium' )[0];

		$imgAlt    = get_post_meta( $attr['id'], '_wp_attachment_image_alt', true );


		?>

        <figure class="wp-block-image my-5 <?php echo $sizeNum < 690 ? 'img-center text-center' : '' ?>">
            <picture>
                <source media="(max-width: 799px)" srcset="<?php echo changeurl($img_srcMobile) ?>">
                <source media="(min-width: 800px)" srcset="<?php echo changeurl($img_destaqueDesk) ?>">
                <img src="<?php echo changeurl($img_destaqueDesk) ?>" alt="<?php echo !empty($imgAlt) ? str_replace('"', '', $imgAlt) : '' ?>" class="<?php echo $sizeNum > 690 ? 'w-100' : '' ?>" loading="lazy" <?php echo $sizeNum < 690 && $sizeNum != 0 ? 'width="'.$sizeNum.'"' : '' ?>>
            </picture>

	        <?php if ( ! empty( $legenda ) || ! empty( $credito ) ) { ?>
                <figcaption class="legenda-credito mx-md-5">
	                <?php if ( ! empty( $legenda ) ) { ?>
                        <p class="m-0"><?php echo $legenda ?></p>
	                <?php } ?>

                    <?php if ( ! empty( $credito ) ) { ?>
                        <span><?php echo $credito ?></span>
                    <?php } ?>
                </figcaption>
            <?php } ?>
        </figure>

	<?php }
}

//galeria de fotos
add_filter( 'render_block_core/gallery', 'mz_renderGaleria', 10, 2 );
function mz_renderGaleria($block_content, $block ) {
	if (!empty($block['attrs']['ids'])) {
		$imagesIds = $block['attrs']['ids'];
	} else {
		$imagesIds = array();
		foreach ($block['innerBlocks'] as $item) {
			preg_match('/<figcaption.*?>(.*?)<\/figcaption>/s', $item['innerHTML'], $match);

			array_push($imagesIds, array('id' => $item['attrs']['id'], 'caption' => !empty($match) ? $match[1] : ''));
		}
	}

	$postId = get_the_ID();


	if ( ! is_feed() && ! is_admin() && ! wp_is_json_request() ) { ?>
        <div class="marco-galeria position-relative my-5">
            <div class="slider-control-galeria d-flex" aria-label="Carousel Navigation" tabindex="0">
                <a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

                <a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
            </div>

            <div class="mx-md-5">
                <div class="galeria-sl">
                    <?php foreach ( $imagesIds as $images_id ) {
	                    $legenda = !empty($images_id['caption']) ? $images_id['caption'] : '';
	                    $credito = get_field( 'img_credito', $images_id['id'] );
	                    $image = wp_get_attachment_image_src($images_id['id'], 'large');
	                    $imgAlt    = get_post_meta( $images_id['id'], '_wp_attachment_image_alt', true ); ?>

                        <div class="sl">
                            <div class="text-center">
                                <picture>
                                    <source media="(max-width: 799px)" srcset="<?php echo $image[0] ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $image[0] ?>">
                                    <img src="<?php echo $image[0] ?>" alt="<?php echo !empty($imgAlt) ? str_replace('"', '', $imgAlt) : '' ?>" class="mw-100" loading="lazy">
                                </picture>
                            </div>

                            <figcaption class="legenda-credito mx-5 mt-2 px-3 px-md-0">
                                <p class="m-0"><?php echo $legenda ?></p>

	                            <?php if ( ! empty( $credito ) ) { ?>
                                    <span>Foto © Arnaldo Sete.Projeto Colabora</span>
                                <?php }?>

                            </figcaption>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
<?php }
}
