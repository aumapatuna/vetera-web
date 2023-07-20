<?php 
/**
* Template Name: Blog listing
*
* @package WordPress
* @subpackage Vetera
*/

get_header();

get_template_part( 'template-parts/vetera-blog-featured-item' );
get_template_part( 'template-parts/vetera-blog-list' );
get_template_part( 'template-parts/components/vetera-comp-get-started' );

get_footer(); 