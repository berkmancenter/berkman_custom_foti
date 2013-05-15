<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
	<div class="column span-17 colborder first" id="maincontent">
		<div class="content">
			<h2>Archives by Month:</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			<h2>Archives by Subject:</h2>
				<ul>
					 <?php wp_list_categories(); ?>
				</ul>
	</div>
</div>
<div class="column span-6 last">
<?php include (TEMPLATEPATH . '/sidebar_single.php'); ?>
</div>
<hr />
<?php get_sidebar(); ?>
<?php get_footer(); ?>