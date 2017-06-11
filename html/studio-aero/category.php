<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="main_content">
				<h2>Staff Blog <span class="h2_sub">スタッフブログ</span></h2>
				<div class="sub_page postpage">

					<?php
					if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>
					<div class="blog_archive">
						<a href="<?php echo get_permalink(); ?>">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail('medium'); 
							}
							else {
								echo '<img src="' . get_bloginfo('template_directory') . '/assets/images/common/default.png' . '" width="300" height="300" alt="thumbnail" />';
							} ?>

							<div class="archive_text">
								<h5><?php echo get_the_title( $ID ); ?></h5>
								<p class="archive_date"><?php echo get_the_date( $ID ); ?></p>
								<p><?php the_excerpt(); ?></p>
							</div></a></div>
						<?php endwhile; ?>

						<?php	the_posts_pagination( array(
							'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
							) );

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif; ?>
					</div>
					<div class="side">
						<h3>Archives</h3>
						<ul>
						<?php wp_get_archives('type=monthly'); ?>
						</ul>
					</div>		
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div><!-- .wrap -->

	<?php get_footer();
