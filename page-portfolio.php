<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that
* other 'pages' on your WordPress site will use a different template.
*
* @package ThemeHunk
* @subpackage Featuredlite
* @since Featuredlite 1.0
*/
get_header();
?>
<?php $layout = "no-sidebar"; ?>
<div id="page" class="<?php echo $layout; ?>">
	<div class="content-wrapper">
		<div class="content">
	<!-- Custom -->
			<div class="portfolio-image-div">
				<img class="circle-image" src="<?php echo wp_get_attachment_url(get_theme_mod('featuredlite_portfolio_image')) ?>">
			</div>
	<!-- -->
		<div class="breadcrumb breadcrumb-center portfolio">
			<h1 class="animated2 fadeIn"><?php echo get_theme_mod('featuredlite_portfolio_h1') ?></h1>
		</div>
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="page-description">
				<div class="flip-container">
					<div class="flip-card php"></div>
					<div class="flip-card html"></div>
					<div class="flip-card css"></div>
					<div class="flip-card java"></div>
					<div class="flip-card sql"></div>
					<div class="flip-card cpp"></div>
					<div class="flip-card js"></div>
					<div class="flip-card bootstrap"></div>
					<div class="flip-card json"></div>
					<!-- <div class="flip-card"></div>-->


					<div class="clearfix"></div>

				</div>

			

						<!-- END OF SKILLSET-->

				<div class="breadcrumb breadcrumb-center">
				<h1>Realizacje</h1>
				</div>
				<div class="team-fix">
					<?php get_template_part( 'template/section_team');?>
				</div>

					<div class="breadcrumb breadcrumb-center">
						<h1>Umiejętności interpersonalne</h1>
					</div>

				<?php echo do_shortcode('
				[skillwrapper type="circle" track_color="#dddddd" chart_color="#333333" chart_size="150" align="center"]
				[skill percent="45" title="Przemawianie"]
				[skill percent="85" title="J. Angielski"]
				[skill percent="70" title="Praca w Zespole"]
				[skill percent="90" title="Nawiązywanie Kontaktów"]
				[/skillwrapper]') ?>
			</div>



			<div class="multipage-links">
				<?php
					wp_link_pages( array(
								'before'      => '<span class="meta-nav">' . __( 'Pages:', 'featuredlite' ) . '</span>',
								'after'       => '',
								'link_before' => '<span class="active">',
								'link_after'  => '</span>',
					) );
				?>
			</div>
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
			comments_template();
			}
			endwhile;
			endif;
			?>
		</div>
		 <?php if ( $layout != 'no-sidebar' ) { ?>
		<div class="sidebar-wrapper"><!--Sidebar wrapper start-->
		<?php get_sidebar(); ?>
	</div>
	<?php } ?>
</div>
</div>
<?php get_footer(); ?>