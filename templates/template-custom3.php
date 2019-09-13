	<?php 
	
	/*************
	 * Template Name: Custom Third
	 *
	 * @package  		 wdjewelry
	 * @file     		 template-custom.php
	 * @author   		 wpdance
	 ***************/		
get_header(); ?>
<div id="primary" class="content-area">	
	<div id="main" class="site-main row" role="main">
		<?php $sub_class = (wdjewelry_check_layout('layout_template_third')?'col-sm-18':'col-sm-24'); ?>
		<!-- SHOW  SIDEBAR lEFT -->
		<?php
			if(get_theme_mod('layout_template_third','sidebar-right') === 'sidebar-left'):
				echo '<div class="col-sm-6 sidebar sidebar__left">';
				wdjewelry_get_sidebar('sidebar_template_third','layout_template_third');
				echo '</div>';
			endif;
		?>
		<div class='<?php echo esc_attr($sub_class); ?>'>
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				// Include the page content template.
			?>
				<div id="post-<?php the_ID(); ?>">
					<div class="entry-content">
						<?php
						the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'wdjewelry' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'wdjewelry' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
						?>
					</div><!-- .entry-content -->

					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'wdjewelry' ),
								get_the_title()
							),
							'<footer class="entry-footer"><span class="edit-link">',
							'</span></footer><!-- .entry-footer -->'
						);
					?>
				</div><!-- #post-## -->
				<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
			<?php endwhile; ?>
		</div>
		<?php
			if(get_theme_mod('layout_template_third','sidebar-right') === 'sidebar-right'):
				echo '<div class="col-sm-6 sidebar sidebar__right">';
				wdjewelry_get_sidebar('sidebar_template_third','layout_template_third');
				echo '</div>';
			endif;
		?>
		<div class="clear"></div>
	</div><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>