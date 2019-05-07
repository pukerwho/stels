<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'post' )
    ->or_where( 'post_type', '=', 'solutions' )
    ->or_where( 'post_type', '=', 'projects' )
    ->add_fields( array(
        Field::make( 'textarea', 'crb_post_description', 'Короткое описание' ),
        Field::make( 'rich_text', 'crb_post_top_text', 'Текст (топ)' ),
        Field::make( 'media_gallery', 'crb_post_gallery', 'Галерея' )->set_type( array( 'image' ) ),
        Field::make( 'rich_text', 'crb_post_bottom_text', 'Текст (низ)' ),
    ) );
}

?>