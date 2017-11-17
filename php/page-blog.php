<?php
/**
 * Template Name: Page Blog
 */

get_header(); ?>

	<div id="primary" class="site_content">
		<div id="content" role="main">
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="block_main">
						<?php while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
						<?php endwhile; // end of the loop. ?>
						
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'cat' => 7,
								'paged' => $paged,
								'posts_per_page' => 10,
								'post_type' => 'post',
								'post_status' => 'publish',
								'order' => 'ASC'
							);
						?>
						<?php $loop = new WP_Query( $args ); ?>
						<?php if( $loop->have_posts() ) : ?>
							<?php while ($loop->have_posts()) : $loop->the_post(); ?>
								<div class="post_element">
									<h2><?php the_title(); ?></h2>
									<?php
										global $more;
										$more = 0;
										the_content();
									?>
									<div class="pe_info">
										<a href="<?php the_permalink(); ?>" class="read_more">Read more</a>
										<div class="pei_date"><?php echo get_the_date('M. j, Y'); ?></div>
										<div class="pei_cat"><?php the_category(', '); ?></div>
									</div>
								</div>
							<?php endwhile; wp_reset_query(); ?> 
						<?php endif; ?>
						<?php if(function_exists('wp_corenavi')) wp_corenavi($loop); ?>
						<div class="clear"></div>
					</div>
				</div>
				
				<?php get_sidebar(); ?>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>