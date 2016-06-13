<?php
/**
 * The front page template file.
 * The front-page.php template file is used to render your site’s front page,
 * whether the front page displays the blog posts index (mentioned above) or a static page.
 * The front page template takes precedence over the blog posts index (home.php) template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *Template Name: Homepage
 * @package OnePress
 */

get_header(); ?>

	<div id="content" class="site-content">

		<?php echo onepress_breadcrumb(); ?>

        <div id="content-inside" class="container right-sidebar">
        	<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">                     
					<div class="col-sm-12 introduction">Viland Implement
					of Pipestone, MN is an independent used farm machinery dealer in Southwest Minnesota. We carry high quality used
					combine attachments, balers, planters, trailers, lawn mowers and other miscellaneous machinery. View the different sections of inventory that are
					for sale to see if there is something you are interested in.
					</div>
					<div class="col-sm-12">
						<div class="col-sm-6 inventoryTypes" style="background: url(../Media/JohnDeereCombine.jpg);">
							<a href="/combinestractors" class="inventoryTypeLinks col-sm-12">Combines And Tractors</a>
						</div>
						<div class="col-sm-6 inventoryTypes" style="background: url(../Media/attachmentPhoto.png);">
							<a href="/heads" class="inventoryTypeLinks col-sm-12">Heads</a>
						</div>
						<div class="col-sm-6 inventoryTypes" style="background: url(../Media/fordTruck.jpeg);">
							<a href="/automobiles" class="inventoryTypeLinks col-sm-12">Automobiles</a>
						</div>
						
						<div class="col-sm-6 inventoryTypes" style="background: url(../Media/Case8480baler1.jpg);">
							<a href="/balers" class="inventoryTypeLinks col-sm-12">Balers</a>
						</div>
						<div class="col-sm-6 inventoryTypes" style="background: url(../Media/jdmower.png);">
							<a href="/residentialproducts" class="inventoryTypeLinks col-sm-12">Residential Products</a>
						</div>
						<div class="col-sm-6 inventoryTypes" style="background: url(../Media/tritontrailer.jpeg);">
							<a href="/trailers" class="inventoryTypeLinks col-sm-12">Trailers</a>
						</div>
						<div class="col-sm-6 inventoryTypes" style="background: url(../Media/JD1760planter4.jpg);">
							<a href="/planters" class="inventoryTypeLinks col-sm-12">Planters</a>
						</div>
					</div>
					<div class="col-sm-12 logoStrip">
						<div class="col-sm-2">
							<img src="../Media/CompanyLogos/John-Deere-Logo.png" />
						</div>
						<div class="col-sm-2">
							<img src="../Media/CompanyLogos/TitanLogo.png" />
						</div>
						<div class="col-sm-2">
							<img src="../Media/CompanyLogos/cressoni.png" />
						</div>
						<div class="col-sm-2">
							<img src="../Media/CompanyLogos/interstatelogo.png" />
						</div>
						<div class="col-sm-2">
							<img src="../Media/CompanyLogos/kieferlogo.png" />
						</div>
						<div class="col-sm-2">
							<img src="../Media/CompanyLogos/caselogo.png" />
						</div>
					</div>
				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
