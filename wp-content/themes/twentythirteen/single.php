<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;
				query_posts("order=ASC&tag!=Main&cat=".$category_id);
			?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>

				<?php //twentythirteen_post_nav(); ?>
				<?php //comments_template(); ?>

			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>