<?php
$menus = wp_get_nav_menu_items('hamburguer');

if(is_home()) { ?>
    <div class="menu-principal pt-3 pt-md-0 pb-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="logo-grande d-flex align-items-center">
                    <a href="<?php echo get_bloginfo( 'wpurl' ) ?>"><i></i></a>

                    <a href="<?php echo get_bloginfo( 'wpurl' ) ?>">
                        <h1 class="m-0">MARCO<span>ZERO</span></h1>
                    </a>
                </div>

                <div class="menu-hamburguer d-flex d-md-none ms-auto align-items-center">
                    <a href="#" class="lupa me-3"></a>

                    <div class="hamb d-flex flex-column">
                        <span class="mb-2"></span>
                        <span></span>
                    </div>
                </div>

                <div class="d-none d-md-flex flex-column ms-auto mt-3">
                    <div class="social d-flex align-items-center">
                        <a href="https://www.facebook.com/mzconteudo" target="_blank" class="facebook"></a>
                        <a href="https://www.instagram.com/marcozeroconteudo/" target="_blank" class="instagram"></a>
                        <a href="https://twitter.com/mzconteudo" target="_blank" class="twitter"></a>
                        <a href="https://www.youtube.com/channel/UCHUPTRXZkMiKP0o9xkb8_GQ" target="_blank" class="youtube-m"></a>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="#" class="apoie apoie-click">APOIE</a>
                    </div>
                </div>
            </div>

            <div class="d-none d-md-flex">
                <div class="menu-cat d-none d-md-flex align-items-center">
                    <a href="/category/direitos-humanos/" class="text-uppercase me-5"><span class="opacity-0"></span>direitos humanos</a>
                    <a href="/category/socioambiental/" class="text-uppercase me-5"><span class="me-3"></span>socioambiental</a>
                    <a href="/category/direito-a-cidade/" class="text-uppercase me-5"><span class="me-3"></span>direito à cidade</a>
                    <a href="/category/diversidade/" class="text-uppercase"><span class="me-3"></span>diversidade</a>
                </div>

                <div class="menu-hamburguer d-flex ms-auto align-items-center me-4">
                    <a href="#" class="lupa me-3"></a>

                    <div class="hamb d-flex flex-column">
                        <span class="mb-2"></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }

if ( is_single() ) {
	$abertura    = get_field( 'post_abertura', get_the_ID() );
	$abertura = !empty($abertura) ? $abertura : '';

	$postCat = get_the_category(get_the_ID());
	$keysEspeciais = array_keys( array_column( $postCat, 'slug' ), 'especiais' ); //keys de texto
}

?>


<div class="menu-default <?php echo is_home() ? 'menu-home' : '' ?> <?php echo isset($abertura) && $abertura === 'centro' ? 'menu-borda' : '' ?> <?php echo !empty($keysEspeciais) ? 'menu-especial esconde' : '' ?>">
    <div class="container">
        <div class="d-flex justify-content-between py-3 int">
            <div class="logo d-flex align-items-center">
                <a href="<?php echo get_bloginfo( 'wpurl' ) ?>"><i></i></a>
                <h1 class="m-0">MARCO<span>ZERO</span></h1>
            </div>

            <div class="menu-cat d-none d-md-flex align-items-center ms-0">
                <a href="/category/direitos-humanos/" class="text-uppercase me-3"><span class="opacity-0"></span>direitos humanos</a>
                <a href="/category/socioambiental/" class="text-uppercase me-3"><span class="me-2"></span>socioambiental</a>
                <a href="/category/direito-a-cidade/" class="text-uppercase me-3"><span class="me-2"></span>direito à cidade</a>
                <a href="/category/diversidade/" class="text-uppercase"><span class="me-2"></span>diversidade</a>
            </div>

            <div class="menu-hamburguer d-flex align-items-center">
                <a href="#" class="lupa me-3"></a>

                <div class="hamb d-flex flex-column">
                    <span class="mb-2"></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="menu-hide">
    <a href="javascript:;" class="close-menu"></a>

    <div class="d-flex flex-column menu-hide__principal">
	<?php
	if ( ! empty( $menus ) ) {
		foreach ( $menus as $menu ) {
			$gtmName = '';

			if ( $menu->type === 'taxonomy' || $menu->type === 'post_type' ) {
				$nome = $menu->title;
				$link = $menu->url;
			} elseif ( $menu->type === 'custom' ) {
				$nome = $menu->post_title;
				$link = $menu->url;

				$slug    = explode( '/', $link );
				$gtmName = $slug[3];
			}

			if($menu->type === 'taxonomy') {
				$gtmName = get_category($menu->object_id);
				$gtmName = $gtmName->slug;
			} elseif ($menu->type === 'post_type'){
				$gtmName = get_post($menu->object_id);
				$gtmName = $gtmName->post_name;
			}
			?>

            <a href="<?php echo esc_url($link) ?>" class="text-uppercase m-0"><?php echo $nome ?></a>
		<?php }
	}
	?>
    </div>

    <div class="d-flex flex-column menu-hide__sub mb-4 mt-3">
        <a href="/quem-faz/" class="m-0">Quem faz</a>
        <a href="/sobre/" class="m-0">Sobre</a>
        <a href="/transparencia/" class="m-0">Transparência</a>
        <a href="/contato/" class="m-0">Contato</a>
    </div>

    <div class="mb-2">
        <a href="#" class="apoie text-uppercase apoie-click">APOIE</a>
    </div>

    <div class="mb-4">
        <a href="https://marcozero.us18.list-manage.com/subscribe/post?u=6903930ec168971e947bb728b&id=c1b8b74962" target="_blank" class="apoie news text-uppercase">assine nossa newsletter</a>
    </div>

    <div class="social d-flex align-items-center">
        <a href="https://www.facebook.com/mzconteudo" target="_blank" class="facebook"></a>
        <a href="https://www.instagram.com/marcozeroconteudo/" target="_blank" class="instagram"></a>
        <a href="https://twitter.com/mzconteudo" target="_blank" class="twitter"></a>
        <a href="https://www.youtube.com/channel/UCHUPTRXZkMiKP0o9xkb8_GQ" target="_blank" class="youtube-m"></a>
    </div>
</div>

<?php
$apoioTitulo = get_field( 'apoio_titulo', 'apoio' );
$apoioTxt    = get_field( 'apoio_texto', 'apoio' );

?>

<div class="apoiepop position-fixed px-5 py-4">
    <div class="apoiepop__int">
        <a href="javascript:;" class="close close-modal"><i></i></a>

        <a href="" class="btn principal mb-2 text-uppercase"><?php echo !empty($apoioTitulo) ? $apoioTitulo : 'APOIE O JORNALISMO QUE ESTÁ DO SEU LADO' ?></a>

        <?php echo $apoioTxt ?>

        <div class="d-flex valores">
            <a href="" class="btn text-uppercase">individual</a>
            <a href="" class="btn text-uppercase">mensal</a>
            <a href="" class="btn text-uppercase">anual</a>
        </div>

        <div class="d-flex valores">
            <a href="" class="btn text-uppercase">R$ 20/Mês</a>
            <a href="" class="btn text-uppercase">R$ 50/Mês</a>
            <a href="" class="btn text-uppercase">R$ 100/Mês</a>
            <a href="" class="btn text-uppercase">OUTRAS OPÇÕES</a>
        </div>
    </div>
</div>