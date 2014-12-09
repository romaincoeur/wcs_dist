<?php get_header(); ?>

<div class="container-fluid">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="col-xs-12 col-md-12 bloc_titre">
		<h3><?php the_title(); ?></h3>
	</div>
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>