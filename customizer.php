<?php


/**
* Create Logo Setting and Upload Control
*/
function your_theme_new_customizer_settings($wp_customize) {

    // Add Carousel Section
$wp_customize->add_section('bwb_carousel', array(
    'title' =>'Carousel',
    'description' => '',
    'priority' => 120,
    ));
// add a setting for the site logo
$wp_customize->add_setting('crsl_img_1');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'crsl_img_1',
array(
'label' =>'Slider Image 1',
'section' =>'bwb_carousel',
'settings' =>'crsl_img_1',
) ) );

// Add slider text 3
$wp_customize->add_setting('crsl_txt_1');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'crsl_txt_1', array(
        'label'    => 'Slider Text 1',
        'section'  => 'bwb_carousel',
        'type'     => 'text',
        'settings' => 'crsl_txt_1',
    )));


// add a setting for the site logo
$wp_customize->add_setting('crsl_img_2');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'crsl_img_2',
array(
'label' =>'SLider Image 2',
'section' =>'bwb_carousel',
'settings' =>'crsl_img_2',
) ) );
// Add slider text 2
$wp_customize->add_setting('crsl_txt_2');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'crsl_txt_2', array(
        'label'    => 'Slider Text 2',
        'section'  => 'bwb_carousel',
        'type'     => 'text',
        'settings' => 'crsl_txt_2',
    )));

// add a setting for the site logo
$wp_customize->add_setting('crsl_img_3');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'crsl_img_3',
array(
'label' =>'Slider Image 3',
'section' =>'bwb_carousel',
'settings' =>'crsl_img_3',
) ) );
// Add slider text 3
$wp_customize->add_setting('crsl_txt_3');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'crsl_txt_3', array(
        'label'    => 'Slider Text 3',
        'section'  => 'bwb_carousel',
        'type'     => 'text',
        'settings' => 'crsl_txt_3',
    )));
}
add_action('customize_register', 'your_theme_new_customizer_settings');