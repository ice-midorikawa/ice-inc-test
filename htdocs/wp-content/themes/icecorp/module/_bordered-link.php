<?php
$id_attr = '';
if ( isset( $id ) ) {
	$id_attr = 'id=' . $id;
}
?>
<div class="bordered-link <?php echo $modifier; ?>" <?php echo $id_attr; ?>>
	<a class="bordered-link-tag js-scroll" href="<?php echo $href; ?>">
		<span class="bordered-link-text"><?php echo $text; ?></span>
	</a>
</div>