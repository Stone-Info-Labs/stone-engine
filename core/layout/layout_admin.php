<?php
return (object) array(
  'header' => array(
    'logo' => true ,
    'navigation' => true ,
    'page-title' => true ,
    true
  ) ,
  'featured' => array(
    'title' => true,
    'description' => true ,
    'timestamp' => true ,
    'author'  => true ,
    'content' => true ,
    true
  ) ,
  'side' => array(
    'left' => false ,
    'right' => true ,
    true
  ) ,
  'body' => array(
    'title' => true ,
    'content' => true ,
    true
  ) ,
  'footer' => array(
    'menu' => false ,
    'copyright' => true ,
    'terms' => true ,
    'privacy' => true ,
    true
  ) ,
  'style' => array(
    'defaults' => array(
      'fonts' => array(
        'Courier'
      ) ,
      'admin' => 'Admin' ,
      'css' => 'Base'
    ) ,
    'admin' => 'admin/admin.css' ,
    'base' => 'base.css' 
    
  )
);