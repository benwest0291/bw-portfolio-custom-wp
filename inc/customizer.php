<?php

function bwportfolio_customizer_settings($wp_customize)
{
    /**
     * Site Identity Settings
     */
    // Logo
    $wp_customize->add_setting('company_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'company_logo',
        array(
            'label' => 'Company Logo',
            'section' => 'title_tagline',
            'settings' => 'company_logo',
        )
    ));
    /**
     * My Details
     */
    // Add Company Details Section
    $wp_customize->add_section('my_details', array(
        'title' => 'My Details',
        'description' => '',
        'priority' => 30,
    ));
    // Contact Email
    $wp_customize->add_setting('contact_email');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'contact_email',
        array(
            'label' => 'Contact Email',
            'section' => 'my_details',
            'settings' => 'contact_email',
            'type' => 'text'
        )
    ));
    // Contact Telephone Number
    $wp_customize->add_setting('contact_telephone');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'contact_telephone',
        array(
            'label' => 'Contact Telephone Number',
            'section' => 'my_details',
            'settings' => 'contact_telephone',
            'type' => 'text'
        )
    ));
    // linkedin
    $wp_customize->add_setting('linkedin');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'linkedin',
        array(
            'label' => 'Linkedin url',
            'section' => 'my_details',
            'settings' => 'linkedin',
            'type' => 'text'
        )
    ));

    // github
    $wp_customize->add_setting('github');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'github',
        array(
            'label' => 'Github url',
            'section' => 'my_details',
            'settings' => 'github',
            'type' => 'text'
        )
    ));

    function themeslug_sanitize_dropdown_pages($page_id, $setting)
    {
        $page_id = absint($page_id);
        return ('publish' == get_post_status($page_id) ? $page_id : $setting->default);
    }
}

add_action('customize_register', 'bwportfolio_customizer_settings');