<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage wdjewelry
 * @since wdjewelry 1.0
 */
?>
	<?php global $post, $product; ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="seach_content">
		<div class="col-md-8 col-xs-24">
			<div class='seach_thumbnail' style="margin-right: 30px; width:100%;"><?php wdjewelry_post_thumbnail() ?></div>
		</div>
		<div class="col-md-16 col-xs-24">
			<!--< div class="wd_link_home">
				<a href="<?php //echo esc_url(home_url('/')); ?>"><?php //echo esc_html__('Home','wdjewelry'); ?></a>
			</div> -->
			<div class="content_title">
				<h3> <a href="<?php the_permalink(); ?>"><?php echo get_the_title( ); ?></a></h3>
			</div>

			
			
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="content_author">
					<span><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>"><?php echo get_the_date(); ?></a></span>
					<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo esc_html__('Post By:','wdjewelry').' '.get_the_author(); ?></a></span>
					<span><?php comments_number( '0 comment', '1 comment', '% comment' ); ?></span>

				</div>
				<div class="entry-footer">
					<div class="wd_content_tag"><?php echo get_the_tag_list('<p>'.esc_html__("Tags:","wdjewelry" ).'',', ','</p>'); ?></div>
					<?php $category_list = get_the_category_list(__( ', ', 'wdjewelry' )); ?>
					<?php if($category_list): ?>
					<div class="wd_content_category"><?php echo esc_html__('Category :' ,'wdjewelry' ).wp_kses_post($category_list ); ?></div>
					<?php endif;?>

				</div>
			<?php elseif('product' === get_post_type()): ?>
				<div class="entry-footer">
					<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

						<p class="price"><?php echo $product->get_price_html(); ?></p>

						<meta itemprop="price" content="<?php echo esc_attr( wc_get_price_to_display( $product ) ); ?>" />
						<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
						<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

					</div>
					<div class="product_meta">

						<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

							<span class="sku_wrapper"><?php _e( 'SKU:', 'wdjewelry' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'wdjewelry' ); ?></span></span>

						<?php endif; ?>


					</div>

				</div>
			<?php endif; ?>

			<div class="clear"></div>

			<div class="seach_excerpt" style="margin-top: 10px;"><?php echo get_the_excerpt( ); ?></div>
			<div class="read-more"><a class='button' title='<?php echo esc_html__('Read More','wdjewelry'); ?>' href="<?php the_permalink(); ?>" rel="bookmark"><?php echo esc_html__('Read More','wdjewelry'); ?></a></div>

		</div>
	</div>
</article><!-- #post-## -->