<?php
/**
 * Template Name: Glycemic Index Main
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kickass
 */

get_header(); ?>
	<div class="container">
		<div class="search-box">
			<form action="/search" method="get">
				<input type="search" id="search-box__search-bar" name="q" placeholder="Search eatoplan glycemic index table" aria-label="Search">
			</form>
			<div class="alphabet-box">
				<div class="alphabet-box__all">All</div>	
				<div class="alphabet-box__alphabet-container">
				    <?php
						for ($i = 65; $i <= 90; $i++) {
						    $letter = chr($i); // Convert ASCII to character
						    echo "<div class='alphabet-box__letter-box' filter='$letter'>$letter</div>";
						}
					?>
				</div>
			</div>
		</div> <!-- end of search box -->
	</div>
	

<?php
get_footer();