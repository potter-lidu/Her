<!-- Items -->

<article class="item">
    <header>
        <a href="<?php echo get_permalink() ?>">
			<?php if ( has_post_thumbnail() ) : ?>
                <img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'misc-thumb' );
				echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
			<?php else : ?>
				<?php
				if ( get_option( 'def_banner' ) == '' ) {
					echo '';
				} else {
					echo '<img src="' . esc_url( get_option( "def_banner" ) ) . '" alt="" />';
				}
				?>
			<?php endif; ?>
        </a>
        <h3><?php the_title(); ?></h3>
    </header>

    <p><?php echo sp_string_limit_words( get_the_excerpt(), 20 ); ?>&hellip;</p>

    <p class="block-postMeta">
		<?php echo mutheme_time_since( strtotime( $post->post_date_gmt ) ); ?>
        <span class="middotDivider"></span>
		<?php sp_category( ' ' ); ?>
        <span class="middotDivider"></span>
		<?php post_views(); ?>
    </p>

    <!--	<ul class="actions">-->
    <!--	    <li><a href="--><?php //echo get_permalink() ?><!--" class="button">More</a></li>-->
    <!--	</ul>-->

</article>
						