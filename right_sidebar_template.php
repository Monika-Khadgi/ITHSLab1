<?php
/* Template Name: Undersida 1 Template */
?>
<?php get_header(); ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?> 
            </div>
            <?php
            wp_nav_menu(
              array(
                'menu' => 'right_side_bar',
                'container' => '',
                'theme_location' => 'right_side_bar',
                'items_wrap' => '<aside id="secondary" class="col-xs-12 col-md-3"> <ul id="" class="side-menu">%3$s</ul> </aside>'
              )
            )
          ?>
          </div>
        </div>
			</section>
		</main>

<?php get_footer ();?>