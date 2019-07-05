<?php

// Inizio funzione

function footer_section($wp_customize){
    $wp_customize->add_section('intro_footer', array(
        'title'    => __('Color Scheme', 'understrap-child'),
        'description' => sprintf(__('Opzione del footer','understrap-child')),
        'priority' => 120,
    ));
    $wp_customize->add_setting('showcase_text', array(
  'default' =>_x('Prova a scrivere', 'understrap-child'),
  'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_text', array(
  'label' => __('Text','understrap-child'),
  'section'=> 'intro_footer',
  'priority'=> 1,
  'type'=> 'textarea'
  ));
}
add_action('customize_register','footer_section');