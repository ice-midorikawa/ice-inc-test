<?php
/**
 * フッター
 *
 * @package WordPress
 */
?>

<!--javascript ここから-->
<script src="<?php echo JS_URI; ?>vendor.js"></script>
<script src="<?php echo LIB_URI; ?>ScrollMagic.min.js"></script>
<script src="<?php echo JS_URI; ?>app.js"></script>

<?php if ( is_home() || is_post_type_archive( SERVICE_POST_TYPE ) || is_post_type_archive( WORKS_POST_TYPE ) ) : ?>
	<script src="<?php echo LIB_URI; ?>jquery.heightLine.js"></script>
<?php endif; ?>
<?php if ( is_home() ) : ?>
	<script src="<?php echo JS_URI; ?>index.js"></script>
<?php endif; ?>
<?php if ( is_post_type_archive( SERVICE_POST_TYPE ) ) : ?>
	<script src="<?php echo JS_URI; ?>service.js"></script>
<?php endif; ?>
<?php if ( is_post_type_archive( WORKS_POST_TYPE ) ) : ?>
	<script src="<?php echo JS_URI; ?>works.js"></script>
<?php endif; ?>
<?php if ( is_single() && get_post_type() === SERVICE_POST_TYPE) : ?>
	<script src="<?php echo JS_URI; ?>service-detail.js"></script>
<?php endif; ?>
<?php if ( is_single() && get_post_type() === WORKS_POST_TYPE) : ?>
	<script src="<?php echo JS_URI; ?>works-detail.js"></script>
<?php endif; ?>
<?php if ( is_post_type_archive( NEWS_POST_TYPE ) ) : ?>
    <script src="<?php echo LIB_URI; ?>jquery.heightLine.js"></script>
	<script src="<?php echo JS_URI; ?>news.js"></script>
<?php endif; ?>
<?php if ( is_page( COMPANY_PAGE ) ) : ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBU_idL3AzQNx8yboNy5U2_0mghIyGfmt0"></script>
    <script src="<?php echo JS_URI; ?>company.js"></script>
<?php endif; ?>
<?php if ( is_page( CONTACT_PAGE ) ) : ?>
	<script src="<?php echo JS_URI; ?>contact.js"></script>
<?php endif; ?>
<?php if ( is_page( CONTACT_THANKS_PAGE ) ) : ?>
	<script src="<?php echo JS_URI; ?>contact-thanks.js"></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
