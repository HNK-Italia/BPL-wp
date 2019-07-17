<?php

function footer_section($wp_customize){
  $wp_customize->add_section('intro_footer', array(
      'title'    => __('Footer', 'understrap-child'),
      'description' => sprintf(__('Opzione del footer','understrap-child')),
      'priority' => 120
  ));
  //Sede Legale
  $wp_customize->add_setting('showcase_via_legale', array(
    'default' =>_x('Via G.B. Serralunga, 27', 'understrap-child'),
    'type' => 'theme_mod'
  ));
$wp_customize->add_control('showcase_via_legale', array(
  'label' => __('Sede legale','understrap-child'),
  'section'=> 'intro_footer',
  'priority'=> 1,
  'type'=> 'text'
));
$wp_customize->add_setting('showcase_citta_legale', array(
  'default' =>_x('13900 - Biella (Italia)', 'understrap-child'),
  'type' => 'theme_mod'
));
$wp_customize->add_control('showcase_citta_legale', array(
  'label' => __('','understrap-child'),
  'section'=> 'intro_footer',
  'priority'=> 1,
  'type'=> 'text'
));
//Sede Operativa
  $wp_customize->add_setting('showcase_via_operativa', array(
    'default' =>_x('Via Corradino Sella, 10', 'understrap-child'),
    'type' => 'theme_mod'
  ));
$wp_customize->add_control('showcase_via_operativa', array(
  'label' => __('Sede Operativa','understrap-child'),
  'section'=> 'intro_footer',
  'priority'=> 1,
  'type'=> 'text'
));
$wp_customize->add_setting('showcase_citta_operativa', array(
  'default' =>_x('13900 - Biella (Italia)', 'understrap-child'),
  'type' => 'theme_mod'
));
$wp_customize->add_control('showcase_citta_operativa', array(
  'label' => __('','understrap-child'),
  'section'=> 'intro_footer',
  'priority'=> 1,
  'type'=> 'text'
));
$wp_customize->add_setting('showcase_co_operativa', array(
  'default' =>_x('c/o SELLALAB', 'understrap-child'),
  'type' => 'theme_mod'
));
$wp_customize->add_control('showcase_co_operativa', array(
  'label' => __('','understrap-child'),
  'section'=> 'intro_footer',
  'priority'=> 1,
  'type'=> 'text'
));
// Ditirri
$wp_customize->add_setting('showcase_diritti', array(
'default' =>_x('All rights reserved Big Picture Learning Italia | P.I. 02579780020', 'understrap-child'),
  'type' => 'theme_mod'
));
$wp_customize->add_control('showcase_diritti', array(
  'label' => __('"Tutti i diritti riservati" (senza anno perché è generato automaticamente)','understrap-child'),
  'section'=> 'intro_footer',
  'priority'=> 1,
  'type'=> 'text'
));
 // Link di Instagram
$wp_customize->add_setting('showcase_checkbox_instagram', array(
  'default' =>_x('1', 'understrap-child'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_checkbox_instagram', array(
    'label' => __('Abilita Instagram','understrap-child'),
    'section'=> 'intro_footer',
    'priority'=> 1,
    'type'=> 'checkbox'
  ));
$wp_customize->add_setting('showcase_link_instagram', array(
  'default' =>_x('https://www.instagram.com/bigpictureitalia/', 'understrap-child'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_link_instagram', array(
    'label' => __('Link alla pagina BPL di Instagram','understrap-child'),
    'section'=> 'intro_footer',
    'priority'=> 1,
    'type'=> 'url'
  ));
 // Link di Facebook
  $wp_customize->add_setting('showcase_checkbox_facebook', array(
  'default' =>_x('1', 'understrap-child'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_checkbox_facebook', array(
    'label' => __('Abilita Facebook','understrap-child'),
    'section'=> 'intro_footer',
    'priority'=> 1,
    'type'=> 'checkbox'
  ));
$wp_customize->add_setting('showcase_link_facebook', array(
    'default' =>_x('https://www.facebook.com/bigpicturelearningitalia/', 'understrap-child'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_link_facebook', array(
    'label' => __('Link alla pagina BPL di Facebook','understrap-child'),
    'section'=> 'intro_footer',
    'priority'=> 1,
    'type'=> 'url'
  ));
 // Tasto Privacy Policy
  $wp_customize->add_setting('showcase_Privacy_link', array(
    'default' =>_x('https://www.iubenda.com/privacy-policy/95347031', 'understrap-child'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_Privacy_link', array(
    'label' => __('Link alla pagina di Privacy Policy','understrap-child'),
    'section'=> 'intro_footer',
    'priority'=> 1,
    'type'=> 'url'
  ));
  $wp_customize->add_setting('showcase_Privacy_text', array(
    'default' =>_x('Privacy Policy', 'understrap-child'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_Privacy_text', array(
    'label' => __('Testo per il bottone "Privacy Policy"','understrap-child'),
    'section'=> 'intro_footer',
    'priority'=> 1,
    'type'=> 'text'
  ));
 // Torna su
 $wp_customize->add_setting('showcase_torna', array(
  'default' =>_x('Torna su', 'understrap-child'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_torna', array(
    'label' => __('Tasto che verrà visualizzato sul tasto per tornare all inizio della pagina','understrap-child'),
    'section'=> 'intro_footer',
    'priority'=> 1,
    'type'=> 'text'
  ));
  
}
add_action('customize_register','footer_section');