<?php
get_header();

if ( is_home() ) {
	get_template_part( 'template_partes/pagina-inicial' );
} elseif ( is_category() ) {
	$categoria = get_queried_object();

	if($categoria->slug == 'webstories') {
		get_template_part( 'template_partes/webstories' );
	} elseif($categoria->slug == 'videos') {
		get_template_part( 'template_partes/videos' );
	} else {
		get_template_part( 'template_partes/categorias' );
	}
} elseif(is_post_type_archive('web-story')) {
	get_template_part( 'template_partes/webstories' );
} elseif ( is_single() ) {
	$postCat = get_the_category(get_the_ID());
	$keysEspeciais = array_keys( array_column( $postCat, 'slug' ), 'especiais' );

	if(empty($keysEspeciais)) {
		get_template_part( 'template_partes/single' );
	} else {
		get_template_part( 'template_partes/single-especial' );
	}

} elseif ( is_page() ) {
	get_template_part( 'template_partes/paginas' );
} else {
	get_template_part( 'template_partes/archive' );
}
get_footer();