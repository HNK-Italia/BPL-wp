<?php

function footer_section($wp_customize){
  $wp_customize->add_section('intro_blogbpl', array(
      'title'    => __('Impostazioni Blog', 'understrap-child'),
      'description' => sprintf(__('Opzione della prima pagina del Blog','understrap-child')),
      'priority' => 120
  ));
  // Immagine Blog
  $wp_customize->add_setting('showcase_immagine_blog', array(
    'default' =>_x('https://cwsmgmt.corsair.com/newscripts/landing-pages/wallpaper/v4/Wallpaper-v4-2560x1440.jpg', 'understrap-child'),
    'type' => 'theme_mod'
  ));
$wp_customize->add_control('showcase_immagine_blog', array(
  'label' => __('Immagine principale del Blog','understrap-child'),
  'section'=> 'intro_blogbpl',
  'priority'=> 1,
  'type'=> 'text'
));
// Titolo della Pagina del Blog
$wp_customize->add_setting('showcase_blog_title', array(
  'default' =>_x('Blog', 'understrap-child'),
  'type' => 'theme_mod'
));
$wp_customize->add_control('showcase_blog_title', array(
  'label' => __('Titolo della pagina del Blog','understrap-child'),
  'section'=> 'intro_blogbpl',
  'priority'=> 1,
  'type'=> 'text'
));

}
add_action('customize_register','footer_section');