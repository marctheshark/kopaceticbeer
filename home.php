<?php
/**
 * Template Name: Home Page
 * Template for page view including query categories
 * @package themify
 * @since 1.0.0
 */
?>

<?php get_header(); ?>
<?php
/** Themify Default Variables
 *  @var object */
global $themify; ?>

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">

	<?php themify_content_before(); // hook ?>
	<!-- content -->

		<div id="content" class="clearfix">

	    	<?php themify_content_start(); // hook ?>
	    	<div id ="main-splash">
		    	<button id="menu-is-closed" class="side-button">Craft On Draft</button>
				<button id="packaged-menu-closed" class="side-button">Packaged Beers</button>
				<button id="spirits-menu-closed" class="side-button">Indiana Spirits</button>

		    	<?php require_once( get_stylesheet_directory() . '/populate-menus.php' );?>
		    	<?php echo wpb_lastupdated_posts(); ?>
	    	</div>
	    	<div id="location">
	    		<div id="hours">
	    			<h1>Brewery Hours</h1>
	    			<ul id="brewery-hours">
	    				<li> Monday-Friday Blah - Blah </li>
	    				<li> Saturday-Sunday Blah - Blah </li>
	    			</ul>
	    			<h1>Scoreboard Restaurant Hours</h1>
	    			<ul id="scoreboard-hours">
	    				<li> Sunday - Thursday Blah - Blah</li>
	    				<li> Friday - Saturday Blah - Blah </li>
	    			</ul>
	    		</div>

				<div id="address">
					<h1>Brewery Location</h1>
					<li> 12195 US-421</li>
					<li>Monticello, IN 47960</li>
				</div>
				<div id = "map">
					<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=12195%20US-421%2C%20Monticello%2C%20IN%2047960&key=AIzaSyDvfIqFF5mbBygalFta6OyHl2KjG2KZu7k&zoom=14" allowfullscreen></iframe>
				</div>
	    	</div>
			<?php
			/////////////////////////////////////////////
			// 404
			/////////////////////////////////////////////
			if ( is_404() ) : ?>
				<h1 class="page-title"><?php _e( '404','themify' ); ?></h1>
				<p><?php _e( 'Page not found.', 'themify' ); ?></p>
				<?php if( current_user_can('administrator') ): ?>
					<p><?php _e( '@admin Learn how to create a <a href="https://themify.me/docs/custom-404" target="_blank">custom 404 page</a>.', 'themify' ); ?></p>
				<?php endif; ?>
			<?php endif; ?>

			<?php
			/////////////////////////////////////////////
			// PAGE
			/////////////////////////////////////////////
			?>
			<?php if ( ! is_404() && have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="page-<?php the_ID(); ?>" class="type-page">

				<!-- page-title -->
				<?php if($themify->page_title != 'yes'): ?>
					<h1 class="page-title"><?php the_title(); ?></h1>
				<?php endif; ?>
				<!-- /page-title -->

					<div class="page-content entry-content">

					<?php if ( $themify->hide_page_image != 'yes' && has_post_thumbnail() ) : ?>
						<figure class="post-image"><?php themify_image( "{$themify->auto_featured_image}w={$themify->image_page_single_width}&h={$themify->image_page_single_height}&ignore=true" ); ?></figure>
					<?php endif; ?>

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<?php edit_post_link(__('Edit','themify'), '[', ']'); ?>

					<!-- comments -->
					<?php if(!themify_check('setting-comments_pages') && $themify->query_category == ""): ?>
						<?php comments_template(); ?>
					<?php endif; ?>
					<!-- /comments -->

				</div>
				<!-- /.post-content -->

				</div><!-- /.type-page -->
			<?php endwhile; endif; ?>

			<?php
			/////////////////////////////////////////////
			// Query Category
			/////////////////////////////////////////////
			?>
			<?php if($themify->query_category != ''): ?>

				<?php
				// Categories for Query Posts or Portfolios
				$categories = '0' == $themify->query_category? themify_get_all_terms_ids($themify->query_taxonomy) : explode(',', str_replace(' ', '', $themify->query_category));
				$qpargs = array(
					'post_type' => $themify->query_post_type,
					'tax_query' => array(
						array(
							'taxonomy' => $themify->query_taxonomy,
							'field' => 'id',
							'terms' => $categories
						)
					),
					'posts_per_page' => $themify->posts_per_page,
					'paged' => $themify->paged,
					'order' => $themify->order,
					'orderby' => $themify->orderby
				);
				query_posts( apply_filters( 'themify_query_posts_page_args', $qpargs ) );
				?>

				<?php if(have_posts()): ?>

					<?php
					/////////////////////////////////////////////
					// Entry Filter
					/////////////////////////////////////////////
					if ( 'portfolio' == $themify->query_post_type && ( count( $categories ) > 1 ) && themify_theme_is_masonry_enabled() ) : ?>
						<?php get_template_part( 'includes/filter', $themify->query_post_type ); ?>
					<?php endif; // portfolio query ?>

					<!-- loops-wrapper -->
					<div id="loops-wrapper" class="loops-wrapper <?php echo esc_attr( $themify->layout . ' ' . $themify->post_layout ); ?> <?php echo isset( $themify->query_post_type ) && ! in_array( $themify->query_post_type, array( 'post', 'page' ) ) ? esc_attr( $themify->query_post_type ) : ''; ?>">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'includes/loop', $themify->query_post_type ); ?>

						<?php endwhile; ?>

					</div>
					<!-- /loops-wrapper -->

					<?php if ($themify->page_navigation != 'yes'): ?>
						<?php get_template_part( 'includes/pagination'); ?>
					<?php endif; ?>

				<?php endif; ?>

			<?php endif; ?>

			<?php themify_content_end(); // hook ?>
		</div>
		<!-- /content -->
	    <?php themify_content_after(); // hook ?>

		<?php
		/////////////////////////////////////////////
		// Sidebar
		/////////////////////////////////////////////
		if ( $themify->layout != 'sidebar-none' && ! themify_theme_has_split_scroll() ): get_sidebar(); endif; ?>

</div>
<!-- /layout-container -->

<?php get_footer(); ?>
