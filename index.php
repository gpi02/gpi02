<?php get_header(); ?>

	<?php if (have_posts()) : the_post(); ?>
		<div id="latest-post-wrap">
		<div id="latest-post" class="post">
			<p class="byline"><span><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></span></p>
			<h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
			<p class="meta">
				<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?>
				&nbsp;&nbsp;&nbsp;
				<a href="<?php the_permalink() ?>" class="permalink">Permalink</a>
				&nbsp;&nbsp;&nbsp;
				<?php the_tags('<b>Tags:</b> ', ', ', ''); ?>
			</p>
		</div>
		</div>
<div id="content">

		<div id="recent-posts">
			<h2>Recent Posts</h2>
		<?php while (have_posts()) : the_post(); ?>
		
			<div id="post-<?php the_ID(); ?>" class="post">
				<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<p class="byline"><small>Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?> <?php edit_post_link('Edit', ' | ', ''); ?></small></p>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
			</div>

		<?php endwhile; ?>
			<div style="clear: both;">&nbsp;</div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
