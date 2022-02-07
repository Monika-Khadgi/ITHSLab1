<?php
/* Template Name: Undersida 4 Template */
?>
<?php get_header(); ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?> 
            </div>
            
            <div class="col-xs-12 col-sm-4 col-md-6">
							<img src="<?php the_post_thumbnail_url(); ?>" />
						</div>
          </div>
        </div>
			</section>
		</main>

<?php get_footer ();?>