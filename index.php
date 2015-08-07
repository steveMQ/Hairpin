<?php
get_header();
$pageID = get_option('page_for_posts', true);
?>

<!-- import the dots! -->
<?php get_template_part( 'partials/dots' ); ?>

<div class="blog-subheader">

	<?php
		$attachment_id = get_post_thumbnail_id($pageID);
		$theImg = wp_get_attachment_image_src($attachment_id);
	?>

	<img src="<?php echo $theImg[0]; ?>" class="blog-subheader-image" />

	<span class="blog-subheader-title">
		<?php the_field('blogpage_subheader_title', $pageID); ?>
	</span>
</div>
<?php
	$blog_type = (isset($_GET['blog_type']) ? htmlspecialchars($_GET['blog_type']) : ot_get_option('blog_style', 'style1'));
?>
<?php get_template_part( 'inc/loop/'.$blog_type ); ?>

<?php get_footer(); ?>
