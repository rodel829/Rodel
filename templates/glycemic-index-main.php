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
		<div class="most-search-container">
			<h3 class="most-search-container__title">Most Search</h3>
			<div class="most-search-container__container">
				<div class="most-search-container__boxes box">
					<div class="most-search-container__image">
						<img src="/braise-child/img/rectangle-6.png" alt="Mushroom Varieties">
					</div>
					<div class="most-search-container__content">
						<div class="most-search-container__content__code-diagram">
							
						</div>
						<div class="most-search-container__content__code-graph">
						</div>
						<div class="most-search-container__content__desc">
						</div>
					</div>
				</div>
			</div><!-- end of most-search-box-container container -->
		</div><!-- end of most search -->
	</div>
	

<?php
get_footer();