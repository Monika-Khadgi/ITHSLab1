<?php
/* Template Name: Front page Template */
?>

<?php
get_header();
?>
	<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<img src="<?php the_post_thumbnail_url(); ?>" />
								<div class="text">
                  <?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php
get_footer();
?>
