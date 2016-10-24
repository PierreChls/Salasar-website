<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package winegrower
 */

get_header(); ?>

<style>
	#primary{
		background-color: #fff;
		color: #000 !important;
		padding-bottom: 20px;
	}
	#primary .entry-header{
		display: none;
	}
	
	#primary img.photo_back{
		width: 100%;
		height: auto;
	}
	
	#primary #background_section_image{
		width: 100%;
	    height: auto;
	    display: block;
	    color: #D4D4D4;
	}
	
	#primary #background_section_image img{
		width: 100%;
		height: auto;
	}
	
	#primary #text{
		width: 100%;
	    height: auto;
	    display: block;
	    padding: 1em;
	    color: #38393a;
	    
	}
	
	#primary #text .pag_1, #primary #text .pag_2{
		width: 100%;
	    display: block;
	    margin: 0 auto;
	    vertical-align: top;
		text-align: center;
	}
	
	#primary #text .pag_1 iframe{
		padding: 0;
	    border: 0;
	    width: 100%;
	    margin: 0 auto;
	}
	
	#primary #text .pag_2 button, #primary #text .pag_2 a{
		padding: 10px 20px;
	    background-color: #b7a56d;
	    text-transform: uppercase;
	    color: #00000;
	    border: none;
	    border-radius: 0;
	    outline: none;
	}
	
	.participate{
		margin-bottom: 50px;
	}
	
	#primary #text h1{
		font-size: 3em;
		color: #38393a;
		line-height: 1;
	}
	
	#primary a {
		color: #000 !important;
	}
	
	@media only screen and (max-width: 600px){
		#primary #text .pag_1, #primary #text .pag_2{
			width: 100%;
		    display: block;
			text-align: justify;
		}
	}
	
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				/**
				 * @hooked winegrower_display_comments - 10
				 */
				?>
				
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>