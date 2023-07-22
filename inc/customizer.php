<?php

function bw_customizer_settings($wp_customize)
{
    /**
     * Company Details
     **/
    // Add Company Details Section
    $wp_customize->add_section('company_details', array(
        'title' => 'Company Details',
        'description' => '',
        'priority' => 30,
    ));
    // Contact Email
    $wp_customize->add_setting('contact_email');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact_email',
        array(
            'label' => 'Contact Email',
            'section' => 'company_details',
            'settings' => 'contact_email',
            'type' => 'text'
        )));
    // Contact Telephone Number
    $wp_customize->add_setting('contact_telephone');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact_telephone',
        array(
            'label' => 'Contact Telephone Number',
            'section' => 'company_details',
            'settings' => 'contact_telephone',
            'type' => 'text'
        )));
    /**
     * Footer
     **/
    $wp_customize->add_section('footer', array(
        'title' => 'Footer',
        'description' => '',
        'priority' => 30,
    ));
    $wp_customize->add_setting('website_info');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'website_info',
        array(
            'label' => 'Website Information',
            'section' => 'footer',
            'settings' => 'website_info',
            'type' => 'text'
        )));
    /**
     * Social Settings
     */
    // Add Site Settings
    $wp_customize->add_section('social', array(
        'title' => 'Social Settings',
        'description' => '',
        'priority' => 45,
    ));
    $wp_customize->add_setting('linkedin_url');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkedin_url',
        array(
            'label' => 'Linkedin URL',
            'section' => 'social',
            'settings' => 'linkedin_url',
            'type' => 'text'
        )));
    $wp_customize->add_setting('github_url');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'github_url',
        array(
            'label' => 'Github URL',
            'section' => 'social',
            'settings' => 'github_url',
            'type' => 'text'
        )));
    /**
     * 404 Page Settings
     */
    // Add Site Settings
    $wp_customize->add_section('four-oh-four', array(
        'title' => '404 Page Settings',
        'description' => '',
        'priority' => 48,
    ));
    // 404 Page Title
    $wp_customize->add_setting('four_oh_four_title');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'four_oh_four_title',
        array(
            'label' => 'Page Title',
            'section' => 'four-oh-four',
            'settings' => 'four_oh_four_title',
            'type' => 'text'
        )));
    // 404 Page Content
    $wp_customize->add_setting('four_oh_four_content');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'four_oh_four_content',
        array(
            'label' => 'Page Content',
            'section' => 'four-oh-four',
            'settings' => 'four_oh_four_content',
            'type' => 'textarea'
        )));

    function themeslug_sanitize_dropdown_pages( $page_id, $setting ) {
        $page_id = absint( $page_id );
        return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
    }
}

add_action('customize_register', 'bw_customizer_settings');