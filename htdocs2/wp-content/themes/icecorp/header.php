<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<meta name="viewport" content="width=device-width initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="apple-mobile-web-app-title" content="<?php echo APP_TITLE; ?>">
	<link rel="shortcut icon" href="<?php echo IMAGE_URI; ?>common/favicon.ico">
	<link rel="apple-touch-icon-precomposed"
	      href="<?php echo IMAGE_URI; ?>common/apple-touch-icon-precomposed.png">
	<link rel="stylesheet" href="<?php echo CSS_URI; ?>style.css">


	<script src="<?php echo LIB_URI; ?>modernizr.js"></script>
	<?php wp_head(); ?>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-101505828-1', 'auto');
		ga('send', 'pageview');

	</script>
	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(), event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-MXB2BVJ');</script>
	<!-- End Google Tag Manager -->
</head>
<body id="js-body">
<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXB2BVJ"
	        height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="fb-root"></div>

<noscript class="for-no-js">Javascriptを有効にしてください。</noscript>
<div class="for-old">お使いのOS・ブラウザでは、本サイトを適切に閲覧できない可能性があります。最新のブラウザをご利用ください。</div>

<input type="hidden" value="<?php echo ITEM_URL; ?>" id="js-base-url">