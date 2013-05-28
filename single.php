<?php get_header(); ?>
	<!--<div class="column span-17 colborder first" id="maincontent">-->
            <div class="column span-15 colborder first" id="maincontent">
		<!--<div class="content">-->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- <div class="navigation small">
					<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
					<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
				</div> 
				<div style="padding-bottom: 15px;"></div> -->
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<p class="small">
						<?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
						by <?php the_author() ?> &nbsp;|&nbsp; 
						Published in
						<?php
							the_category(', ');
							if($post->comment_count > 0) { 
									echo ' &nbsp;|&nbsp; ';
									if($post->comment_count > 1) { 
										echo '<a href="#comments">' . $post->comment_count . ' Comments</a>';
									} else {
										echo '<a href="#comments">1 Comment</a>';
									}
							}
							edit_post_link('Edit', ' &nbsp;|&nbsp; ', '');
						?>
					</p>
					
					<div class="entry">
						<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						
					</div>
				</div>
			<?php comments_template(); ?>
			<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
<!--</div>-->
</div>
<div class="column span-6 last">
<div class="column span-8 last">


<!--CUSTOMIZATION FOR RECENT POSTS-->
<?php 

$postid = $post->ID;
query_posts(array('showposts' => 5, 'post__not_in' => array($postid)));

?>

<?php 
global $more;
// set $more to 0 in order to only get the first part of the post
$more = 0; 
?>

	<h2 class="widgettitle"><a href="/blog">Blog</a></h2>
	<ul>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href='<?php the_permalink() ?>'><strong><?php the_title(); ?></strong></a></li>

                <?php the_content('Read more »'); ?>
                
		<?php endwhile; ?>
	</ul>

<!--End customization-->


<!-- ABOUT BOX -->
<div class="box">
<h6>About Jonathan Zittrain</h6><br>
<img src=" <?php echo wp_get_attachment_url( 9 ); ?> " alt="jonathan zittrain" width="100"/><br><br>
<p class="small"><?php bloginfo('description'); ?></p>
</div>


<?php include (TEMPLATEPATH . '/sidebar_single.php'); ?>
</div>


</div>

<hr />

<?php get_sidebar(); ?>
<?php get_footer(); ?>