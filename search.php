<?php get_header(); ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                <h1>Blogg</h1>
                <?php $the_query = new WP_Query( array( 'post_type' => 'post' ) );
                // The Loop
                if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('template-parts/content', 'article');
                }
                } else {
                // no posts found
                } ?> 

                <?php
                  the_posts_pagination();
                ?>
            </div>
          </div>
        </div>
			</section>
		</main>

<?php get_footer ();?>