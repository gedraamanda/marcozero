<?php
remove_filter('the_content', 'wpautop');

$qtd     = get_field( 'quadro_qtd' );
$legenda = get_field( 'quadro_legenda' );
$credito = get_field( 'quadro_credito' );
$imagens = get_field('quadro_'.$qtd);

//var_dump($imagens); die;

if ( $qtd === '4' ) { ?>
	<div class="grid-imagens my-5">
		<div class="d-flex">
			<div class="coluna-1">
				<div class="d-flex flex-column">
					<?php foreach ( $imagens as $i => $img ) {
						if ( $i == 0 || $i == 1 ) { ?>
                            <div class="<?php echo $i == 0 ? 'mb-3' : '' ?>">
                                <img src="<?php echo $img['imagem']['url'] ?>"
                                     alt="<?php echo ! empty( $img['imagem']['alt'] ) ? str_replace( '"', '', $img['imagem']['alt'] ) : '' ?>"
                                     class="mw-100" loading="lazy">
                            </div>
						<?php }
					} ?>
				</div>
			</div>

			<div class="coluna-2">
				<div class="d-flex flex-column">
					<?php foreach ( $imagens as $i => $img ) {
						if ( $i == 2 || $i == 3 ) { ?>
                            <div class="<?php echo $i == 2 ? 'mb-3' : '' ?>">
                                <img src="<?php echo $img['imagem']['url'] ?>"
                                     alt="<?php echo ! empty( $img['imagem']['alt'] ) ? str_replace( '"', '', $img['imagem']['alt'] ) : '' ?>"
                                     class="mw-100" loading="lazy">
                            </div>
						<?php }
					} ?>
				</div>
			</div>
		</div>

		<?php if ( ! empty( $legenda ) || ! empty( $credito ) ) { ?>
			<div class="legenda-credito mt-3 mt-md-2 mx-5 mx-md-auto">
				<?php if ( ! empty( $legenda ) ) { ?>
					<p class="m-0"><?php echo $legenda ?></p>
				<?php }?>

				<?php if ( ! empty( $credito ) ) { ?>
					<span><?php echo $credito ?></span>
				<?php }?>
			</div>
		<?php } ?>
	</div>
<?php }

if ( $qtd === '3' ) { ?>
	<div class="grid-imagens my-5">
		<div class="d-flex">
			<div class="coluna-1">
				<div class="d-flex flex-column">
					<div class="mb-3">
                        <picture>
                            <img src="<?php echo $imagens[0]['imagem']['url'] ?>" alt="<?php echo !empty($imagens[0]['imagem']['alt']) ? str_replace('"', '', $imagens[0]['imagem']['alt']) : '' ?>" class="mw-100" loading="lazy">
                        </picture>
					</div>

				</div>
			</div>

			<div class="coluna-2">
				<div class="d-flex flex-column">
					<?php foreach ( $imagens as $i => $img ) {
						if ( $i != 0 ) { ?>
                            <div class="mb-3">
                                <img src="<?php echo $img['imagem']['url'] ?>"
                                     alt="<?php echo ! empty( $img['imagem']['alt'] ) ? str_replace( '"', '', $img['imagem']['alt'] ) : '' ?>"
                                     class="mw-100" loading="lazy">
                            </div>
						<?php }
					} ?>

				</div>
			</div>
		</div>

		<?php if ( ! empty( $legenda ) || ! empty( $credito ) ) { ?>
			<div class="legenda-credito mt-3 mt-md-2 mx-5 mx-md-auto">
				<?php if ( ! empty( $legenda ) ) { ?>
					<p class="m-0"><?php echo $legenda ?></p>
				<?php }?>

				<?php if ( ! empty( $credito ) ) { ?>
					<span><?php echo $credito ?></span>
				<?php }?>
			</div>
		<?php } ?>
	</div>
<?php }

if ( $qtd === '2' ) { ?>
	<div class="grid-imagens my-5">
		<div class="d-flex">
			<?php foreach ( $imagens as $i => $img ) { ?>
				<div class="coluna-<?php echo $i + 1 ?>">
					<div class="d-flex flex-column">
						<div class="mb-0">
							<picture>
								<img src="<?php echo $img['imagem']['url'] ?>" alt="<?php echo !empty($img['imagem']['alt']) ? str_replace('"', '', $img['imagem']['alt']) : '' ?>" class="mw-100" loading="lazy">
							</picture>
						</div>

					</div>
				</div>
			<?php } ?>
		</div>

		<?php if ( ! empty( $legenda ) || ! empty( $credito ) ) { ?>
			<div class="legenda-credito mt-3 mt-md-2 mx-5 mx-md-auto">
				<?php if ( ! empty( $legenda ) ) { ?>
					<p class="m-0"><?php echo $legenda ?></p>
				<?php }?>

				<?php if ( ! empty( $credito ) ) { ?>
					<span><?php echo $credito ?></span>
				<?php }?>
			</div>
		<?php } ?>
	</div>
<?php }






