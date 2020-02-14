<?php
/**
 * This template displays full width pages.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 * 
 * Template Name: Landing Template 1
 */
/*Get the header*/
get_header('template-1'); ?>
<div class="landing-page-1">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div id="landing-page-one" class="section">
   <div class="block" id="services">
      <div class="left">
      <h2><?php echo the_field( 'services_header' ); ?></h2>
	  <h3><?php echo the_field( 'services_subheader' ); ?></h3>
	  </div>
	  <div class="right">
	  <img src="<?php echo the_field( 'services_icon' ); ?>">
	  </div>
	</div>
   <div class="block" id="roi-calculator">
         <div class="left">
      <h2><?php echo the_field( 'roi_calculator_header' ); ?></h2>
	  <h3><?php echo the_field( 'roi_calculator_subheader' ); ?></h3>
	  </div>
	  <div class="right">
	  <img src="<?php echo the_field( 'roi_calculator_icon' ); ?>">
	  </div>
   </div>
   <div class="block" id="about">
            <div class="left">
      <h2><?php echo the_field( 'about_header' ); ?></h2>
	  <h3><?php echo the_field( 'about_subheader' ); ?></h3>
	  </div>
	  <div class="right">
	  <img src="<?php echo the_field( 'about_us_icon' ); ?>">
	  </div>
   </div>
   <div class="block" id="contact">
               <div class="left">
      <h2><?php echo the_field( 'contact_header' ); ?></h2>
	  <h3><?php echo the_field( 'contact_subheader' ); ?></h3>
	  </div>
	  <div class="right">
	  <img src="<?php echo the_field( 'contact_icon' ); ?>">
	  </div>
   </div>
</div>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
</div>
<?php get_footer(); ?>
<!--Adding new file-->