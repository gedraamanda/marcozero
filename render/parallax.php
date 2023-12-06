<?php
$img = get_field('parallax_imagem');

?>

<div class="parallax mt-3">
	<picture>
		<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>" class="w-100 img-parallax">
	</picture>
</div>