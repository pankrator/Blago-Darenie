<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<?php
	$promise = true;
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$tags = wp_get_post_tags(get_the_ID());
	foreach($tags as $tag) {
		if($tag->name == "Main") {
			$anchor = '/darenie/new-post-2/?category='.$category_id;
			$promise_anchor = '<a href="'.$anchor.'"><input type="button" id="user-submitted-post" name="user-submitted-post" value="Добави обещание" /></a>';
			$promise = false;
		}
	}
	
	$_SESSION['paybutton_name'] = $promise ? "Закупи" : "Дари";
	
	$offset = $promise ? "style='margin-left: 100px'" : "";
	
	$content = get_the_content(__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ));
	$priceIndexEnd = strrpos($content, "[[PRICEEND]]");
	$priceIndexStart = strrpos($content, "[[PRICE]]");
	$price = substr($content, $priceIndexStart + 9, $priceIndexEnd - $priceIndexStart - 9);
	$price = intval($price);
	
	$emailIndexEnd = strrpos($content, "[[ENDEMAIL]]");
	$emailIndexStart = strrpos($content, "[[EMAIL]]");
	$email = substr($content, $emailIndexStart + 9, $emailIndexEnd - $emailIndexStart - 9);
	
?> 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php echo $offset; ?> >
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		<?php 
			echo $promise_anchor;
		?>
		<div style="float: right; ">
			<?php 
				if($promise)
				{
					echo do_shortcode('[wp_cart_button name="'.get_the_title().'" price="'.$price.'" email="'.$email.'"]');
				}
				else
				{
					?>
					<label id="" for="donation">Безвъзмездно дарение:</label><br/>
					<input type="text" id="donation" name="donation" value="1" /><br/>
					<span id="pesho" style="display: inline-block;">
						<?php echo do_shortcode('[wp_cart_button name="Безвъзмездно дарение" price="1"]'); ?>
					</span>
					<script>
						document.getElementById("donation").onchange = function(){
							jQuery.post("/getDonation.php", {price: jQuery("#donation").val() }, function(data) {
								jQuery("#pesho").html(data);
							});
						}
					</script>
					<?php
				}
			?>
		</div>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
