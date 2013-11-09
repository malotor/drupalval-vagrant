<?php

/**
 * @file
 * Administration
 */ 


function author_profile_admin_settings() {

  $content_types_list = node_type_get_types(); 
  foreach ($content_types_list as $key => $type) {
    $list[$key] = $type->name;
  }
  
  $form['profile'] = array(
    '#type' => 'fieldset',
    '#title' => t('Profile pages'),
  );
  
  $form['profile']['author_profile_activate_profile'] = array(
    '#type' => 'radios',
    '#title' => t('Activate profile pages from authors'), 
    '#options' => array(
      1 => t('Yes'),
      0 => t('No'),
    ),
    '#default_value'=> variable_get('author_profile_activate_profile', 1),
    '#description' => t('If check this option, profile pages from users will be visible'), 
  );
  
  
  
  $form['twitter'] = array(
    '#type' => 'fieldset',
    '#title' => t('Twitter'),
  );
  
  
  $form['twitter']['author_profile_twitter_show_followers'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show followers'), 
    '#default_value'=> variable_get('author_profile_twitter_show_followers', false),
    '#description' => t('If check this option, followers will show in twitter button'), 
  );
  
  $form['twitter']['author_profile_twitter_language'] = array(
    '#type' => 'textfield',
    '#title' => t('Language'), 
    
    '#default_value'=> variable_get('author_profile_twitter_language', 'en'),
    '#description' => t('The Follow Button is available in English (en), French (fr), German (de), Italian (it), Spanish (es), Korean (ko) and Japanese (ja).'), 
  );
  $form['twitter']['author_profile_twitter_width'] = array(
    '#type' => 'textfield',
    '#title' => t('Width'), 
    
    '#default_value'=> variable_get('author_profile_twitter_width', ''),
    '#description' => t('You can specify the width of the Follow Button in px or percenteja'), 
  );
  
  $form['twitter']['author_profile_twitter_alignment'] = array(
    '#type' => 'textfield',
    '#title' => t('Alignment'), 
    
    '#default_value'=> variable_get('author_profile_twitter_alignment', 'left'),
    '#description' => t('You can specify the alignment of the Follow Button'), 
  );
  
  $form['twitter']['author_profile_twitter_show_screen_name'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Screen Name'), 
        '#default_value'=> variable_get('author_profile_twitter_show_screen_name', false),
    '#description' => t('The user´s screen name shows up by default, but you can opt not to show the screen name in the button'), 
  );
  
  
  $form['twitter']['author_profile_twitter_button_size'] = array(
    '#type' => 'radios',
    '#title' => t('Button size'), 
    '#options' => array(
      'medium' => t('Medium'),
      'large' => t('Large'),
    ),
    '#default_value'=> variable_get('author_profile_twitter_button_size', 'medium'),
    
    '#description' => t('The size of the button can render in either "medium", which is the default size, or in "large"'), 
  );
  
  $form['twitter']['author_profile_twitter_opt_out'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Opt-out'), 
    
    '#default_value'=> variable_get('author_profile_twitter_opt_out', false),
    '#description' => t('witter buttons on your site can help us tailor content and suggestions for Twitter users'), 
  );
  
  return system_settings_form($form);
}