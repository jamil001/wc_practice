<?php
/**
 * Template Name: Full Width  
 
 */

get_header();
?>

	<div class="body-content">
		<div class="container">
			<div class="row">
				
					<div class="col-md-12">

						<?php
						while ( have_posts() ) :
							the_post();

							the_content();

						endwhile; // End of the loop.
						?>

					</div>

				
			</div>
		</div>
	</div>

<?php

get_footer();
