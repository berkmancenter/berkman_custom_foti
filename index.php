<?php get_header(); ?>
<div id="feature" class="column span-15 colborder">
<?php function post_style() {
	static $post_count;
	$post_count++;
		if ($post_count % 2) {
			echo "post_alt";
		}
		else {
			echo "post_first";
		}
}
?>
<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<p class="small">
						<?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
						by <?php the_author() ?> &nbsp;|&nbsp; 
						Published in
						<?php
							the_category(', ');
							//if($post->comment_count > 0) { 
									echo ' &nbsp;|&nbsp; ';
									if ($post->comment_count == 0) {
									echo '<a href="'. get_permalink() .'#respond">Click to comment</a>';
									} elseif($post->comment_count > 1) { 
										echo '<a href="'. get_permalink() .'#comments">' . $post->comment_count . ' Comments</a>';
									} elseif ($post->comment_count == 1) {
										echo '<a href="'. get_permalink() .'#comments">1 Comment</a>';
									}
							//}
							edit_post_link('Edit', ' &nbsp;|&nbsp; ', '');
						?>
					</p>
			<div class="entry">
				<?php echo apply_filters('the_content', $post->post_content); ?>
			</div>
</div>

			<?php endwhile; ?>

		<?php else : ?>

			<h2>If you're seeing this, it's time to go slap somebody.</h2>
			<p class="post_date">* * *</p>
			<div class="entry">
				<p>Sorry, but you are looking for something that isn't here.</p>
				<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			</div>

		<?php endif; ?>

<div class="navigation"><p><?php posts_nav_link(); ?></p></div>

<!-- MORE NEWS -->
<div class="news-block">
<h2 class="quiet">Previously</h2>
 <?php
 global $post;
 $myposts = get_posts('numberposts=6&offset=1');
 foreach($myposts as $post) :
 setup_postdata($post);
 ?>
<hr />
<div class="column span-3 first">
<?php the_time('M j, Y') ?>
</div>
<div class="column span-12 last">
<div class="<?php post_style(); ?>" id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
<p class="meta">by <?php the_author_posts_link(); ?> | <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read</a> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
<?php the_excerpt(); ?>
</div>
</div>
 <?php endforeach; ?>



</div>
</div>
<div class="column span-8 last">
<!-- ABOUT BOX -->
<div class="box">
<h6>About Jonathan Zittrain</h6>
<br>
<img src="http://futureoftheinternet.org/wp-content/uploads/2008/03/jz.jpg" alt="jonathan zittrain" width="100"/><br><br>
<p class="small">Jonathan Zittrain is a Professor of Law at <a href="http://law.harvard.edu">Harvard Law School</a>, and faculty co-director of the <a href="http://cyber.law.harvard.edu">Berkman Center for Internet & Society at Harvard University</a>. </p>
</div>

<div class="column span-4 first">
<?php include (TEMPLATEPATH . '/sidebar_single.php'); ?>
</div>





<div class="column span-4 last">





<!-- CONTRIBUTORS -->
<div class="bottombar">



<!-- CONTRIBUTORS

<h2 class="widgettitle">Contributors</h2>
<ul><?php wp_list_authors('exclude_admin=0&hide_empty=0'); ?></ul>

-->



<!-- POPULAR 
<h2 class="widgettitle">Popular</h2>
<ul>
	<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 10");
	foreach ($result as $topten) {
	$postid = $topten->ID;
	$title = $topten->post_title;
	$commentcount = $topten->comment_count; 
	if ($commentcount != 0) { ?>
	<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?></a></li>
	<?php } } ?> 
	</ul>

-->


<!-- BOOKMARKS -->
<?php wp_list_bookmarks('between=<br>&show_description=1&orderby=url&show_updated=1&title_li=&title_before=<h2 class="widgettitle">&title_after=</h2>'); ?>


</div>
</div>
</div>
<hr />
<?php get_sidebar(); ?>
<?php get_footer(); ?>

