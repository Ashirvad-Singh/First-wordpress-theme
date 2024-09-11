<?php
/**
 * The header for our child theme
 *
 * Displays all of the <head> section and everything up until <div id="content">
 *
 * @package WordPress
 * @subpackage  Twenty_Twenty_One_Child
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?php echo wp_get_document_title(); ?></title>

	<!-- Page Title - END -->
	<link rel="icon" type="image/x-icon" sizes="16x16" href="images/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	
	
    <?php wp_head(); ?>
</head>



<body id="bodyTop">
	<header class="container-fluid px-0 header fixed-top">
		<nav class="navbar navbar-expand-lg navbar-dark navbar-me customnav" id="mainNav">
			<div class="container-fluid">
				<a class="navbar-brand toplogo text-left" href="#bodyTop"> <?php the_custom_logo();?></a>
			</div>
                 

		</nav>
	</header>
