<?php get_header(); ?>

<!-- import the dots! -->
<?php get_template_part( 'partials/dots' ); ?>

<?php
	$portfolio_share = get_post_meta($post->ID, 'portfolio_share', TRUE);
	$portfolio_nav = get_post_meta($post->ID, 'portfolio_nav', TRUE);
	$portfolio_related = get_post_meta($post->ID, 'portfolio_related', TRUE);
	$portfolio_main = get_post_meta($post->ID, 'portfolio_main', TRUE);
	$portfolio_link = $portfolio_main ? get_permalink($portfolio_main) : false;
	$meta = get_the_term_list( $post->ID, 'project-category', '<span>', '</span>, <span>', '</span>' );
	$meta = preg_replace('/<a href=\"(.*?)\">(.*?)<\/a>/', "\\2", $meta);

?>
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class('post blog-post'); ?> id="post-<?php the_ID(); ?>" role="article">

		<div class="post-content single-text">

			<?php the_content(); ?>

			<div class="row">
				<div class="single-portfolio-arrows">
					<div class="left-arrow">
						<?php previousPortfolioLink(); ?>
					</div>
					<div class="right-arrow">
						<?php nextPortfolioLink(); ?>
					</div>

				</div>
			</div>

			<?php echo do_shortcode('[thb_portfolio style="grid" masonry_style="style1" portfolio_sort="by-category" item_count="14" random="" categories="43,46,53,58" carousel="" columns="5" add_filters="" loadmore=""]'); ?>

			<?php if ( is_single()) { wp_link_pages(); } ?>

			<?php if ($portfolio_share !== 'off') { ?>
				<?php get_template_part( 'inc/postformats/post-social' ); ?>
			<?php } ?>
		</div>



	</article>
	<?php if ($portfolio_related !== 'off') { ?>
		<?php get_template_part( 'inc/postformats/post-related' ); ?>
	<?php } ?>
	<?php if ($portfolio_nav !== 'off') { ?>
		<?php do_action( 'thb_post_navigation', array('portfolio', $portfolio_link, __('BACK TO ALL PROJECTS', THB_THEME_NAME) ) ); ?>
	<?php } ?>
<?php endwhile; else : endif; ?>
<?php get_footer(); ?>
