<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

        <article class="post page">

			<?php if ( has_children() || $post->post_parent > 0 ) { ?>

                <nav class="site-nav children-links clearfix">
            <span class="parent-link"><a
                        href="<?= get_the_permalink( get_top_ancestor_id() ) ?>"><?= get_the_title( get_top_ancestor_id() ) ?></a></span>
                    <ul>
						<?php
						$args = [
							'child_of' => get_top_ancestor_id(),
							'title_li' => ''
						];
						?>
						<?php wp_list_pages( $args ); ?>
                    </ul>
                </nav>
			<?php } ?>


            <h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
        </article>

	<?php endwhile;

else :
	echo '<p>No content found</p>';

endif;

get_footer();

?>