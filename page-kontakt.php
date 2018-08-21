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
<?php $layout = 'right'; ?>
<div id="page" class="<?php echo $layout; ?>">
	<div class="content-wrapper">
		<div class="content">
		<div class="breadcrumb breadcrumb-center">
			<h1><?php the_title(); ?></h1>
		</div>
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="page-description">
				<div class="contact-parent">
					<h6>Skontaktuj się używając podanych danych lub natychmiastowo skorzystaj z formularza kontaktowego!</h6>

					<p>Numer telefonu:</p>
					<a href="tel:570546193"><p class="p-right"> 570 - 546 - 193</p></a>
					<p>E-mail:</p>
					<a href="mailto:szpakowski.n0@gmail.com"><p class="p-right last"> szpakowski.n0@gmail.com</p></a>
				</div>
				<?php the_content(); ?>
				
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