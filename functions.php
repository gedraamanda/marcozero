<?php
//Includes
include dirname( __FILE__ ) . '/functions/render.php';

/*
 * Remove &nbsp dos posts;
*/
function remove_empty_lines( $content ){
    $content = preg_replace("/&nbsp;/", "", $content);
    return $content;
}
add_action('content_save_pre', 'remove_empty_lines');

/**
 * Thumbnails no wordpress
 */
add_theme_support( 'post-thumbnails' );
/**
 * Tamanhos das imagens para thumbs
 */
//add_image_size( 'thumb-card', 330, 248, true );

/**
 * Habilita o Title no wordpress
 */
add_theme_support( 'title-tag' );
/**
 * Remove scripts e estilos nativos do wordpress
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Adiciona os estilos e scripts do tema
 */
function add_estilos_e_scripts() {
	// Estilos
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'tiny-css', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css');

	// Scripts
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'tiny-js', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js', array(), '', true );
	wp_enqueue_script( 'parallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js', array(), '', true );
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '', true );
	wp_enqueue_script( 'gsap-trig', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array(), '', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'add_estilos_e_scripts' );

function add_scripts_admin() {

	$componentes_version = filemtime(dirname(__FILE__) . '/style_admin.css');
	wp_enqueue_style('css', get_template_directory_uri() . '/style_admin.css', array(), $componentes_version);

}
add_action('admin_init', 'add_scripts_admin');

/**
 * Adiciona div responsiva para oEmbeds
 */
function responsive_embed_html( $html, $url ) {
    if ( preg_match( '/youtube.com/', $url ) || preg_match( '/vimeo.com/', $url ) ) {
        return '<div class="ratio ratio-16x9">' . $html . '</div>';
    } else {
        return $html;
    }
}

add_filter( 'embed_oembed_html', 'responsive_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'responsive_embed_html' );

/**
 * Remove o meta generator do Wordpress
 */
remove_action('wp_head', 'wp_generator');

/**
 * Posições de Menu
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' ); */

/**
 * Ajustes do admin bar
 */

function arphabet_widgets_init() {
    register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function url_exists( $url ) {
	$headers = get_headers( $url );

	return stripos( $headers[0], "200 OK" ) ? true : false;
}


function get_image_prod( $post_id, $size) {
	$image_destaque   = get_the_post_thumbnail_url( $post_id, $size );

	if ( $_SERVER['HTTP_HOST'] === 'marcozero.spacecrane.com.br' ) {
		$image_destaque = str_replace('https://marcozero.spacecrane.com.br', 'https://marcozero.org', $image_destaque);
		$image_destaque = str_replace('http://marcozero.spacecrane.com.br', 'https://marcozero.org', $image_destaque);
	} else {
	    $image_destaque = str_replace('http://marco.ms', 'https://marcozero.org', $image_destaque);
	}

	return $image_destaque;
}

// funcao imagem de destaque
function mz_imgDestaque( $postId, $sizeDesk = null, $sizeMobile = null, $classe = null, $lazy = true ) {
	$imgMobile = ! empty( $sizeMobile ) ? get_image_prod( $postId, $sizeMobile ) : get_image_prod( $postId, 'medium' );
	$imgDesk   = ! empty( $sizeDesk ) ? get_image_prod( $postId, $sizeDesk ) : get_image_prod( $postId, 'large' );

	$imgData = get_post( get_post_thumbnail_id( $postId ) );
	$imgTitle  = $imgData->post_title;
	$imgAlt    = get_post_meta( $imgData->ID, '_wp_attachment_image_alt', true );


	?>

	<picture>
		<source media="(max-width: 799px)" srcset="<?php echo $imgMobile ?>">
		<source media="(min-width: 800px)" srcset="<?php echo $imgDesk ?>">
		<img src="<?php echo $imgDesk ?>" alt="<?php echo !empty($imgAlt) ? str_replace('"', '', $imgAlt) : '' ?>" title="<?php echo !empty($imgTitle) ? str_replace('"', '', $imgTitle) : '' ?>" class="<?php echo $classe ?>" <?php echo $lazy === true ? 'loading="lazy"' : '' ?>>
	</picture>

	<?php
}

function mz_linhaFina($postId, $classeLink = null, $classeLinha = null) {
    $linhaFina = get_field('post_linhafina', $postId);

    if(!empty($linhaFina)) { ?>
        <a href="<?php echo get_permalink( $postId ) ?>" class="<?php echo !empty($classeLink) ? $classeLink : '' ?>">
            <p class="class="<?php echo !empty($classeLinha) ? $classeLinha : '' ?>""><?php echo $linhaFina ?></p>
        </a>
    <?php }
}

function mz_detalhes( $postId, $class = null, $barraClass = null, $barra = true ) {
	$autores = get_coauthors($postId);

	$dataPublicacao = esc_html( get_the_date( 'd/m/Y', $postId ) );
    ?>

    <div class="detalhe <?php echo !empty($class) ? $class : '' ?>">
        <?php foreach ( $autores as $auto ) { ?>
            <a href="<?php echo get_author_posts_url($auto->data->ID) ?>" class="assina text-uppercase me-3"><?php echo $auto->data->display_name ?></a>
        <?php } ?>

        <?php if ( $barra ) { ?>
            <span class="<?php echo !empty($barraClass) ? $barraClass : '' ?>">/</span>
        <?php }?>

        <span class="data"><?php echo $dataPublicacao ?></span>
    </div>
<?php }

function mz_tags($postId, $class = null, $qtd = null) {
	if ( empty( $qtd ) ) {
		$qtd = 3;
    }

	$tags = wp_get_post_tags($postId);

	if ( ! empty( $tags ) ) {
		$output = array_slice( $tags, 0, $qtd ); ?>

        <div class="tags <?php echo !empty($class) ? $class : '' ?>">
            <?php foreach ( $output as $tag ) { ?>
                <a href="<?php echo get_tag_link($tag->term_id) ?>" class="btn text-uppercase me-2 mb-2"><?php echo $tag->name ?></a>
            <?php } ?>
        </div>
    <?php }

}

//cores das categorias - recebe o slug da categoria
function mz_catCores( $categoria ) {
	$cor = '';

	if ( $categoria === 'direitos-humanos' ) {
		$cor = '#FF5E30';
	} elseif ( $categoria === 'diversidade' ) {
		$cor = '#F3B2CA';
	} elseif ( $categoria === 'socioambiental' ) {
		$cor = '#7BDDDD';
	} elseif ( $categoria === 'direito-a-cidade' ) {
		$cor = '#BC9689';
	} else {
		$cor = '#EBEB01';
	}

	return $cor;
}

function changeurl($url) {
	if ( $_SERVER['HTTP_HOST'] === 'marcozero.spacecrane.com.br' ) {
		$url = str_replace('http://marcozero.spacecrane.com.br', 'https://marcozero.org', $url);
		$url = str_replace('https://marcozero.spacecrane.com.br', 'https://marcozero.org', $url);
	} else {
		$url = str_replace('http://marco.ms', 'https://marcozero.org', $url);
	}

	return $url;
}

function mz_checkEspecial() {
    $especial = false;

	if ( is_single() ) {
		$postCat = get_the_category(get_the_ID());
		$keysEspeciais = array_keys( array_column( $postCat, 'slug' ), 'especiais' );

		if ( ! empty( $keysEspeciais ) ) {
			$especial = true;
		}
    }

	return $especial;
}

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
    if(mz_checkEspecial()) {
	    $classes[] = 'single-especial';
    }

    return $classes;
}

add_filter( 'acf/fields/post_object/query', 'change_posts_order' );
function change_posts_order( $args ) {
	$args['orderby'] = 'date';
	$args['order'] = 'DESC';
	return $args;
}

// get youtube video ID
function mz_youtubeId($iframe) {
	preg_match( '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=|live/)|youtu\.be/)([^"&?/ ]{11})%i', $iframe, $match );

	return $match[1];
}

