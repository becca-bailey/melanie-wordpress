<?php
/**
 * The template for displaying my homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 *
 */

get_header(); ?>

<section class="home-page">
	<div class="header-content">
		<nav class="home-nav">
			<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
			<div class="social-icons">
				<a href="#"><img src="wp-content/themes/melanie-theme/img/twitter.png" alt="twitter"></a>
				<a href="#"><img src="wp-content/themes/melanie-theme/img/facebook2.png" alt="twitter"></a>
				<a href="#"><img src="wp-content/themes/melanie-theme/img/GitHub-Mark-32px.png" alt="twitter"></a>
				<a href="#"><img src="wp-content/themes/melanie-theme/img/linkedin.png" alt="twitter"></a>
			</div>
		</nav>
		<div class="header-image">
			<div id="title-box">
				<a href="<?php echo site_url(); ?>" class="top-logo"> <span class="title"><?php bloginfo('name'); ?></span></a>
				<span class="sub-title"><?php bloginfo('description'); ?></span>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">Enter</a>
			</div>
		</div> <!-- Header Image -->
	</div> <!-- Header Content -->
	<div class="home-content"></div>
		<div class="content" id="page">
			<?php while ( have_posts() ): the_post(); ?>
				<h1>Welcome!</h1> <!-- Put your custom message here -->
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div> <!-- Home Content -->
	<div class="home-widget-area">
		<div class="content" id="page">
			<div id="home-widgets" class="home-widgets widget-area" role="complementary">
			<?php dynamic_sidebar( 'home-1' ); ?>
			</div><!-- #secondary-sidebar -->
		</div>
	</div> <!-- Home Widget Area -->
	
</section>

<?php get_footer(); ?>