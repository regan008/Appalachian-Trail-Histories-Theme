<!DOCTYPE html>
<html lang="<?php
echo get_html_lang();
?>">
<head>
	<meta charset="utf-8">
  <?php
if ($description = option('description')):
?>
  <meta name="description" content="<?php
    echo $description;
?>" />
  <?php
endif;
?>

  <title><?php
echo option('site_title');
echo isset($title) ? ' | ' . strip_formatting($title) : '';
?></title>

  <?php
echo auto_discovery_link_tags();
?>


  <!-- Plugin Stuff -->

  <?php
fire_plugin_hook('public_head', array(
    'view' => $this
));
?>

  <!-- Stylesheets -->

  <?php
queue_css_url('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic');
queue_css_file('foundation');
queue_css_file('app');
echo head_css();
?>

  <!-- JavaScripts -->
  <?php
queue_js_file('app');
?>
  <?php
queue_js_file('vendor/foundation');
?>
  <?php
queue_js_file('vendor/jquery');
?>





  <?php
echo head_js();
?>




</head>

<?php
echo body_tag(array(
    'id' => @$bodyid,
    'class' => @$bodyclass
));
?>
    <?php
fire_plugin_hook('public_body', array(
    'view' => $this
));
?>

<header>
		  <?php
fire_plugin_hook('public_header');
?>
		</header>

		<div class="top-bar">
			<div class="top-bar-title">
			 <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon dark" type="button" data-toggle></button>
    	</span>
		    <!-- Title Area -->
		       <strong id="site-title"><a href="#"><?php
echo link_to_home_page(theme_logo());
?></a></strong>
		    </div>
				<div id="responsive-menu">
					<div class="top-bar-left">

								        <!-- Left Nav Section -->


				        <?php
echo public_nav_main()->setUlClass('menu');
?>



									

</div>
<div class="top-bar-right">
			<ul class="menu">
				<li><?php
echo link_to_item_search('More Search Options');
?></li>

		  <li><?php
echo search_form(array(
    'show_advanced' => false
));
?></li>

</ul>
 </div>
 </div>
 </div>
	<div class="row">

		<div class="large-12 columns">

	      <h1 id="site-title"><?php
echo link_to_home_page(theme_logo());
?></h1>
