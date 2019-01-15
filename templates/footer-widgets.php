<div class="container">
	<div class="row pt-120 pb-80">
		<?php 
		// Footer Widget Start

		// Footer widget 1
		if( is_active_sidebar( 'footer-1' ) ) {
			echo '<div class="col-lg-4 col-md-6"><div class="single-footer-widget">';
				dynamic_sidebar( 'footer-1' );
			echo '</div></div>';
		}

		// Footer widget 2
		if( is_active_sidebar( 'footer-2' ) ) {
			echo '<div class="col-lg-4 col-md-6"><div class="single-footer-widget">';
				dynamic_sidebar( 'footer-2' );
			echo '</div></div>';
		}

		// Footer widget 3
		if( is_active_sidebar( 'footer-3' ) ) {
			echo '<div class="col-lg-4  col-md-6"><div class="single-footer-widget">';
				dynamic_sidebar( 'footer-3' );
			echo '</div></div>';
		}
				
		?>
	</div>
</div>