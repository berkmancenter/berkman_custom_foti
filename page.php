<?php get_header(); ?>
	<!--<div class="column span-17 colborder first" id="maincontent">-->
            <div class="column span-15 colborder first" id="maincontent">
		<!--<div class="content">-->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit', '<p>[ ', ' ]</p>'); ?>
<!--</div>-->
</div>
<div class="column span-8 last">


<!-- ABOUT BOX 
<div class="box">
<img src="<?php echo wp_get_attachment_url( 9 ); ?>" alt="jonathan zittrain" width="100"/><br><br>
<p class="small"><?php bloginfo('description'); ?>
<p class="small"><a href="http://www.amazon.com/gp/product/0300124872?ie=UTF8&tag=jonatzittr-20&linkCode=as2&camp=1789&creative=9325&creativeASIN=0300124872" target="_blank">Buy the book from Amazon</a>
<br><a href="<?php echo get_site_url(); ?>/download">Download the Book</p>
</div>
-->

<!--CUSTOMIZATION FOR RECENT POSTS-->
<?php query_posts('showposts=2'); ?>
<?php 
global $more;
// set $more to 0 in order to only get the first part of the post
$more = 0; 
?>

	<h3 class="widgettitle"><a href="<?php echo get_site_url(); ?>/blog">Future of the Internet Blog</a></h3>
	<ul>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href='<?php the_permalink() ?>'><strong><?php the_title(); ?></strong></a></li>

                <?php the_content_rss('', FALSE, '', 40); ?>

		<?php endwhile; ?>
	</ul>

<!--End customization-->


<!-- ABOUT BOX 
<div class="box">
<h6>About Jonathan Zittrain</h6><br>
<img src="<?php echo wp_get_attachment_url( 9 ); ?>" alt="jonathan zittrain" width="100"/><br><br>
<p class="small"><?php bloginfo('description'); ?></p>
</div>
-->


<?php include (TEMPLATEPATH . '/sidebar_single.php'); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>