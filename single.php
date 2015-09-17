<?php get_header(); ?>

<!-- import the dots! -->
<?php get_template_part( 'partials/dots' ); ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
  <article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class('post style1 blog-post'); ?> id="post-<?php the_ID(); ?>" role="article">
  	<?php if ( has_post_thumbnail() ) { ?>
  		<?php
  		    $image_id = get_post_thumbnail_id();
  		    $image_link = wp_get_attachment_image_src($image_id,'full');
  		    $image_title = esc_attr( get_the_title($post->ID) );
  			$image = aq_resize( $image_link[0], 1200, 600, true, false);  // Blog

  		?>
	<figure class="post-gallery parallax_bg" data-stellar-background-ratio="0.1" style="background-image: url('<?php echo $image[0]; ?>');"></figure>
	<?php } ?>
	<div class="row">
		<div class="small-12 medium-10 large-6 medium-centered columns">
			<header class="post-title">
				<h1 itemprop="headline"><?php the_title(); ?></h1>
			</header>
			<?php get_template_part( 'inc/postformats/post-meta' ); ?>
			<div class="post-content">
				<?php the_content(); ?>
				<?php if ( is_single()) { wp_link_pages(); } ?>
			</div>
		</div>
	</div>
  </article>
<?php endwhile; else : endif; ?>

<?php get_footer(); ?>
