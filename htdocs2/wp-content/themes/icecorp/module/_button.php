<?php
if ( !isset( $icon_params ) ) {
	$icon_params = array(
		'icon'     => '',
		'modifier' => ''
	);
}

$target_attr = '';
if ( isset( $target ) ) {
	$target_attr = 'target="' . $target . '"';
}
?>
<<?php echo $tag; ?> class="button <?php echo $modifier; ?>" <?php echo ( $tag === 'a' ) ? 'href="' . $href . '"' : '' ?> <?php echo $target_attr; ?>>
<span class="button-text"><?php echo $text; ?></span>

<?php if ( strpos( $variation, 'with-icon' ) !== false ): ?>
	<span class="button-icon <?php echo $icon_params['modifier']; ?>">
		<i class="arrow-icon <?php echo $icon_params['icon']; ?>"></i>
	</span>
<?php endif; ?>
</<?php echo $tag; ?>>