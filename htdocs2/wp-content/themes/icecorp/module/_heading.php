<?php
if ( !isset( $h ) ) {
	$h = 1;
}
if ( !isset( $underline_params ) ) {
	$underline_params = array(
		'modifier' => ''
	);
}
?>

<div class="heading <?php echo $modifier; ?>">
	<h<?php echo $h; ?> class="heading-title">
		<span class="heading-title-en"><?php echo $text; ?></span>
		<span class="heading-title-jp"><?php echo $sub; ?></span>
	</h<?php echo $h; ?>>
	<?php
	$heading_underline_modifier = '';
	if ( strpos( $modifier, 'heading-centered' ) !== false ) {
		$heading_underline_modifier = 'heading-underline-centered';
	}
	?>
	<div class="heading-underline <?php echo $heading_underline_modifier; ?>">
		<?php importTemplate( 'module/_wave-underline', array( 'modifier' => $underline_params['modifier'] ) ); ?>
	</div>
</div>