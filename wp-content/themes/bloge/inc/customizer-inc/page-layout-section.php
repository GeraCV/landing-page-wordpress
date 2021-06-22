<?php
$wp_customize->add_section( 'bloge-page-layout', array(
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'title'          => __( 'Page Options', 'bloge' )
) );
/* feature cat selection */
$wp_customize->add_setting( 'bloge_theme_options[page-layout]', array(
    'capability'        => 'edit_theme_options',
    'default'           => 'right-sidebar',
    'sanitize_callback' => 'bloge_sanitize_select'
) );

$choices = bloge_sidebar_layout();
$wp_customize->add_control('bloge_theme_options[page-layout]',
            array(
            'choices'   => $choices,
            'label'     => __( 'Select Sidebar Layout', 'bloge'),
            'section'   => 'bloge-page-layout',
            'settings'  => 'bloge_theme_options[page-layout]',
            'type'      => 'select',
            'priority'  => 10
         )
    );