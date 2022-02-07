  <article>
      <img src="<?php the_post_thumbnail_url(); ?>" alt="image"/>
          <h2 class="title">
            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
          </h2>
          <ul class="meta">
            <li>
              <i class="fa fa-calendar"></i> <?php the_date(); ?>
            </li>
            <li>
              <i class="fa fa-user"></i><?php the_author_link();?>
            </li>
            <li>
              <?php
                the_tags('<i class="fa fa-tag"></i>');
              ?>
            </li>
          </ul>
      <?php
        the_excerpt();
      ?>
</article>