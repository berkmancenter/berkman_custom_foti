<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
	<div class="column span-17 colborder first" id="maincontent">
		<div class="content">
		<?php if (have_posts()) : ?>
		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
		<?php
		$temp = $wp_query;
		$wp_query= null;
		$wp_query = new WP_Query();
		$wp_query->query('posts_per_page=5'.'&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post();
		?>
			<?php getPost(); ?>
		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
		<?php $wp_query = null; $wp_query = $temp;?>
		<?php endif; ?>
	</div>
</div>
<div class="column span-6 last">
<?php include (TEMPLATEPATH . '/sidebar_single.php'); ?>
</div>
<hr />
<?php get_sidebar(); ?>
<?php get_footer(); ?>