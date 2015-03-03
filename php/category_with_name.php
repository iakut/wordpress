<?php 
#$categories = get_categories('child_of=27&hide_empty=1&orderby=id');
$categories = array(13,14,15,16,17,21,20,18,28,8,23,25);
foreach ($categories as $category) { 

	$args = array(
	'showposts' => -1,
	'cat' => $category,
	'date_query' => array(
	array(
	'month' => date('n'),
	)
	),
	'taxonomy' => 'categorii',
	'post_status' => 'publish'
	);
	?>
	<?php $loop = new WP_Query( $args ); ?>
	<?php if ( $loop->have_posts() ){ global $more; // Объявим переменную $more как глобальную (перед Циклом WordPress). ?>
		<div class="cat-title"><h1><?php echo get_cat_name( $category ) ?></h1></div>
		<?php while ($loop->have_posts()) : $loop->the_post(); ?>
			<div class="block-post">
			
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="bp-img">
				<?php the_post_thumbnail(array(320,9999)); ?>
				</div>
				<?php } ?>
				
				<div class="bp-text">
				<h1><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="clear"></div>
				<?php echo s_get_meta_data($post->ID, 'quote'); ?>
				<?php $more = 0; // Изменим значение переменной, чтобы показать только текст до тега more. 
				the_content('(more...)');
				?>
				</div>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	<?php } ?>
	
<?php } ?>