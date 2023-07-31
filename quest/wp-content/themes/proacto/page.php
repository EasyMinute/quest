<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proacto
 */

get_header();
// Check value exists.
if( have_rows('content') ):
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() =='baner' ):
            get_template_part('template-parts/parts/baner');

        elseif( get_row_layout() =='text_on_image' ):
            get_template_part('template-parts/parts/text_on_image');

        elseif( get_row_layout() =='image_with_details' ):
            get_template_part('template-parts/parts/image_with_details');

        elseif( get_row_layout() =='list_with_image' ):
            get_template_part('template-parts/parts/list_with_image');

        elseif( get_row_layout() =='cta' ):
            get_template_part('template-parts/parts/cta');

        elseif( get_row_layout() =='roadmap' ):
            get_template_part('template-parts/parts/roadmap');

        elseif( get_row_layout() =='team' ):
            get_template_part('template-parts/parts/team');

        elseif( get_row_layout() =='small_cta' ):
            get_template_part('template-parts/parts/small_cta');

        elseif( get_row_layout() =='contact_block' ):
            get_template_part('template-parts/parts/contact_block');

        elseif( get_row_layout() == 'small_baner' ):
            get_template_part('template-parts/parts/small_banner');

        elseif( get_row_layout() =='accordeons' ):
            get_template_part('template-parts/parts/accordeons');

        elseif( get_row_layout() =='simplest_cta' ):
            get_template_part('template-parts/parts/simplest_cta');

        elseif( get_row_layout() =='under_development' ):
            get_template_part('template-parts/parts/under_development');
        
        endif;

    endwhile;

endif;

get_footer();