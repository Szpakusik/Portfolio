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
				
			<?php echo do_shortcode('
			[skillwrapper type="bar"]
			[skill title_background="#f7a53b" bar_foreground="#f7a53b" bar_background="#eeeeee" percent="90" title="CSS"]
			[/skillwrapper]') ?>
			<ul class="portfolio_skills">
				<li>Pasja Informatyki(pl) - Kurs CSS - 270 min</li>
				<li>Derek Banas(en) - Kurs RW in One Video - 30 min</li>
				<li>Strona w czystym html i css - 700 podstron</li>
			</ul>

			<?php echo do_shortcode('
			[skillwrapper type="bar"]
			[skill title_background="#3B56A5" bar_foreground="#062FAA" bar_background="#eeeeee" percent="95" title="HTML"]
			[/skillwrapper]') ?>
			<ul class="portfolio_skills">
				<li>Pasja Informatyki(pl) - Kurs HTML - 370 min</li>
				<li>Strona w czystym html i css - 700 podstron</li>
			</ul>

			<?php echo do_shortcode('
			[skillwrapper type="bar"]
			[skill title_background="#fa6e6e" bar_foreground="#fa6e6e" bar_background="#eeeeee" percent="75" title="PHP"]
			[/skillwrapper]') ?>

			<ul class="portfolio_skills">
				<li>Pasja Informatyki(pl) - Kurs PHP - 420 min</li>
				<li>LearnWebCode(en) - Kurs Wordpress - 330 min</li>
				<li>Strona na Wordpressie - portfolio</li>
				<li>CodinGame (SzpaQ) - Zadania Średnie - 1</li>
			</ul>

			<?php echo do_shortcode('
			[skillwrapper type="bar"]
			[skill title_background="#336699" bar_foreground="#336699" bar_background="#eeeeee" percent="40" title="C++"]
			[/skillwrapper]') ?>

			<ul class="portfolio_skills">
				<li>Pasja Informatyki(pl) - Kurs C++ - 480 min</li>
				<li>Pasja Informatyki(pl) - Kurs Podejcia Obiektowego (C++) - 380 min</li>
				<li>Polski Spoj (Szpakusik) - Zadania Łatwe - 15</li>
				<li>CodinGame (SzpaQ) - Zadania Średnie - 1</li>
			</ul>

			<?php echo do_shortcode('
			[skillwrapper type="bar"]
			[skill title_background="#336699" bar_foreground="#336699" bar_background="#eeeeee" percent="40" title="Java"]
			[/skillwrapper]') ?>
			<ul class="portfolio_skills">
				<li>Derek Banas(en) - Kurs Java in One Video - 30 min</li>
				<li>Polski Spoj (Szpakusik) - Zadania Łatwe - 1</li>
				<li>CodinGame (SzpaQ) - Zadania Łatwe - 5</li>
				<li>CodinGame (SzpaQ) - Zadania Średnie - 1</li>
			</ul>

			<?php echo do_shortcode('
			[skillwrapper type="bar"]
			[skill title_background="#fa6e6e" bar_foreground="#fa6e6e" bar_background="#eeeeee" percent="75" title="JavaScript"]
			[/skillwrapper]') ?>

			<ul class="portfolio_skills">
				<li>Pasja Informatyki(pl) - Kurs JS - 270 min</li>
			</ul>

			<?php echo do_shortcode('
			[skillwrapper type="bar"]
			[skill title_background="#f7a53b" bar_foreground="#f7a53b" bar_background="#eeeeee" percent="90" title="MySQL"]
			[/skillwrapper]') ?>
			<ul class="portfolio_skills">
				<li>Pasja Informatyki(pl) - Kurs MySQL - 180 min</li>
			</ul>

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