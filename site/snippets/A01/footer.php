	</main>
	
	<footer id="footer">
		<div id="menu"></div>
		<small id="copyright">
			Copyright &copy; 2014-<?php echo date("Y"); ?> 
			<a class="copyright-link" href="https://twitter.com/meltajon" onClick="ga('send', 'event', 'copyright-link', 'click', 'Mel Tajon');">Mel Tajon</a>
		</small>
	</footer>

	<!-- Load below-the-fold CSS after page load -->
	<script>
	$(document).ready(function() {

		if($("body").size()>0){
			if (document.createStyleSheet) {

				<?php
					$children = $site->children()->visible();
					foreach ($children as $child) { 
						$child_css_collection = $child->files()->filterBy('extension', 'css');
						foreach ($child_css_collection as $child_css) {
							echo "document.createStyleSheet('" . $child_css->url() . "');\n";
						} //end foreach
					} // end foreach 
				?>

			} else {

				<?php
					// backup method
					$children = $site->children()->visible();
					foreach ($children as $child) { 
						$child_css_collection = $child->files()->filterBy('extension', 'css');
						foreach ($child_css_collection as $child_css) {
							echo "$(\"head\").append($('<link rel=\"stylesheet\" media=\"screen\" href=\"" . $child_css->url() . "\" />'));\n";
						} //end foreach
					} // end foreach
				?>

			} // document.createStyleSheet
		} // $("body").size()>0
	});
	</script>

</body>

</html>