<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
    Container::make( 'post_meta', 'More' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'tpl_main.php' )
        ->add_fields( array(
        	Field::make( 'image', 'crb_main_photo', 'Заглавное фото' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_main_title', 'Главный заголовок' ),
            Field::make( 'textarea', 'crb_main_description', 'Короткое описание' ),
            Field::make( 'text', 'crb_main_protect_subtitle', 'Блок Техническая защита (подзаголовок)' ),
            Field::make( 'textarea', 'crb_main_protect_description', 'Блок Техническая защита (описание)' ),
            Field::make( 'complex', 'crb_partners', 'Партнеры' )
                ->set_layout( 'tabbed-horizontal')
                ->add_fields( array(
                    Field::make( 'image', 'crb_partners_photo', 'Лого' )->set_value_type( 'url'),
                    Field::make( 'text', 'crb_partners_text', 'Заголовок' ),
            ) ),
        ) );
    Container::make( 'post_meta', 'More' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'tpl_solutions.php' )
        ->add_fields( array(
            Field::make( 'image', 'crb_solutions_photo', 'Заглавное фото' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_solutions_title', 'Главный заголовок' ),
            Field::make( 'textarea', 'crb_solutions_description', 'Короткое описание' ),
        ) );
    Container::make( 'post_meta', 'More' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'tpl_about.php' )
        ->add_fields( array(
            Field::make( 'image', 'crb_about_photo', 'Заглавное фото' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_about_title', 'Главный заголовок' ),
            Field::make( 'textarea', 'crb_about_description', 'Короткое описание' ),
        ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_about_block_title', 'Заголовок для блока О нас' ),
            Field::make( 'text', 'crb_about_block_subtitle', 'Подзаголовок для блока О нас' ),
            Field::make( 'textarea', 'crb_about_block_text', 'Текст для блока О нас' ),
        ))
        ->add_fields( array(
            Field::make( 'complex', 'crb_about_has', 'Компания располагает:' )
                ->set_layout( 'tabbed-horizontal')
                ->add_fields( array(
                    Field::make( 'textarea', 'crb_about_has_text', 'Текст' ),
            ) ),
        ))
        ->add_fields( array(
            Field::make( 'textarea', 'crb_about_standart', 'Текст для блока Стандарты' ),
        ));
    Container::make( 'post_meta', 'More' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'tpl_projects.php' )
        ->add_fields( array(
            Field::make( 'image', 'crb_projects_photo', 'Заглавное фото' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_projects_title', 'Главный заголовок' ),
            Field::make( 'textarea', 'crb_projects_description', 'Короткое описание' ),
        ) );
    Container::make( 'post_meta', 'More' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'tpl_service.php' )
        ->add_fields( array(
            Field::make( 'image', 'crb_service_photo', 'Заглавное фото' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_service_title', 'Главный заголовок' ),
            Field::make( 'textarea', 'crb_service_description', 'Короткое описание' ),
            Field::make( 'rich_text', 'crb_service_text', 'Дополнительный текст' ),
        ) );
    Container::make( 'post_meta', 'More' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'tpl_sertificates.php' )
        ->add_fields( array(
            Field::make( 'image', 'crb_sertificates_photo', 'Заглавное фото' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_sertificates_title', 'Главный заголовок' ),
            Field::make( 'textarea', 'crb_sertificates_description', 'Короткое описание' ),
            Field::make( 'media_gallery', 'crb_sertificates_licenses', 'Лицензии (фото)' )->set_type( array( 'image' ) ),
            Field::make( 'media_gallery', 'crb_sertificates_sertificates', 'Сертификаты (фото)' )->set_type( array( 'image' ) ),
        ) );
    Container::make( 'post_meta', 'More' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'tpl_contact.php' )
        ->add_fields( array(
            Field::make( 'text', 'crb_contact_title', 'Главный заголовок' ),
            Field::make( 'textarea', 'crb_contact_map', 'Карта (iframe)' ),
            Field::make( 'textarea', 'crb_contact_address', 'Адрес' ),
            Field::make( 'complex', 'crb_contact_phones', 'Телефоны' )
                ->set_layout( 'tabbed-horizontal')
                ->add_fields( array(
                    Field::make( 'text', 'crb_contact_phones_text' ),
            ) ),
            Field::make( 'complex', 'crb_contact_emails', 'Email' )
                ->set_layout( 'tabbed-horizontal')
                ->add_fields( array(
                    Field::make( 'text', 'crb_contact_emails_text' ),
            ) ),
        ) );
}

?>