<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog
 */

?>

<footer>
	<div class="site-container">
		<a href="/blog">View all Posts</a>
		<a href="/">About Me</a>
	</div>
	<script>
		if(navigator.onLine) {
			window.addEventListener('offline', function() {
				var d = document.createElement('div');
				d.classList.add('_JS_offLineBanner');
				d.innerHTML = 'It looks like you\'re offline! Not to worry, you can still read all articles on the blog! <span class="_JS_closeOfflineBanner">x</span>';
				d.classList.add('offline-banner');
				document.body.appendChild(d);
			});
			document.body.addEventListener('click', function(e) {
				if (e.target.classList.contains('_JS_closeOfflineBanner')) {
					var d = document.querySelector('._JS_offLineBanner');
					document.body.removeChild(d);
				}
			});
			window.addEventListener('online',  function() {
				var d = document.querySelector('._JS_offLineBanner');
				document.body.removeChild(d);
			});
		}
	</script>
</footer>

<?php wp_footer(); ?>

</body>
</html>
