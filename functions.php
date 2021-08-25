<?php

add_theme_support( 'post-thumbnails' );

add_shortcode( 'tooltip', function( $atts, $content = '' ) {

	$a = shortcode_atts( [
		'slug' => '',
	], $atts );

    $tooltips = get_posts([
        'posts_per_page' => -1,
        'post_type' => 'tooltip',
    ]);

    foreach($tooltips as $tooltip){

        if($tooltip->post_title === $a['slug']){
            return '<span class="tip" data-tippy-content="'. esc_attr( $tooltip->post_content ).'">'.$content.'</span>';
        }

    }

});


add_shortcode( 'brand', function( $atts ) {

	$a = shortcode_atts( [
		'slug' => '',
	], $atts );

    $brands = get_posts([
        'posts_per_page' => -1,
        'post_type' => 'brand',
    ]);

    foreach($brands as $brand){

        if($brand->post_title === $a['slug']){
            $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($brand->ID));
            return '<img src="'.$attachment[0].'" alt="Logo for ' . $brand->post_title . '" />';
        }

    }

});
