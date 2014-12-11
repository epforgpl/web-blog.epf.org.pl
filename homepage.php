<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

 <section class="homeIntro js-windowHeight">
<div class="homeIntro-container container">
	<div class="homeIntro-lead lead">
		<?php the_field('description'); ?>
	</div>
	<!-- /.homeIntro-lead -->
</div>
<!-- /.homeIntro-container -->
<div class="homeIntro-tiles">
	<div class="homeIntro-tiles-container container">
		<div class="row">
			<div class="homeIntro-tile homeIntro-tile--1">
			</div>
			<div class="homeIntro-tile homeIntro-tile--2 homeIntro-tile--shifted">
			</div>
			<div class="homeIntro-tile homeIntro-tile--3">
				<a href="<?php the_field('link_1'); ?>" class="homeIntro-tile-link"><?php the_field('title_1'); ?><i></i></a>
			</div>
			<div class="homeIntro-tile homeIntro-tile--4 homeIntro-tile--shifted">
				<a href="<?php the_field('link_2'); ?>" class="homeIntro-tile-link"><?php the_field('title_2'); ?><i></i></a>
			</div>
			<div class="homeIntro-tile homeIntro-tile--5">
				<a href="<?php the_field('link_3'); ?>" class="homeIntro-tile-link"><?php the_field('title_3'); ?><i></i></a>
			</div>
			<div class="homeIntro-tile homeIntro-tile--6">
			</div>
			<div class="homeIntro-tile homeIntro-tile--7">
			</div>
		</div>
	</div>
</div>
<!-- /.homeIntro-tiles -->
</section>
<!-- /.homeIntro -->
<section class="homeAbout">
</section>
<!-- /.homeIntro -->





<?php
if( have_rows('sections') ):
	while ( have_rows('sections') ) : the_row(); ?>
		<section style="background-image: url(<?php echo get_sub_field('background'); ?>);" class="homeWhite js-windowHeight" >
		<div class="homeWhite-container container _vm">
		<div class="homeWhite-box <?php if( get_sub_field('box_right') ) echo "homeWhite-box--right"; ?>">
			<h1 class="homeWhite-title"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h1>
			<p>
				<?php the_sub_field('description'); ?>
			</p>
			<a href="<?php the_sub_field('link'); ?>" class="btn btn-primary homeWhite-btn">Więcej <i>&rarr;</i></a>
		</div>
		</div>
		</section>
<?php endwhile; endif; ?>


<?php get_footer(); ?>