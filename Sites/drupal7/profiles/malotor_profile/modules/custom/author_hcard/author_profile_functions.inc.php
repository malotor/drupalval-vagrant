<?php
/**
 * @file
 * Auxiliar functions
 *
 */ 


function _author_profile_installed_fields()  {
  // textfield
  
  $fields['user_name'] = array(
    'field_name' => 'user_name',
    'label' => t('Name'),
    'type' => 'text',
  );
  $fields['user_surname'] = array(
    'field_name' => 'user_surname',
    'label' => t('Surname'),
    'type' => 'text',
  );
  
  $fields['user_twitter'] = array(
    'field_name' => 'user_twitter',
    'label' => t('Twitter account'),
    'type' => 'text',
  );
  $fields['user_linkedin'] = array(
    'field_name' => 'user_linkedin',
    'label' => t('Linkedin url'),
    'type' => 'text',
  );
  $fields['user_github'] = array(
    'field_name' => 'user_github',
    'label' => t('Github url'),
    'type' => 'text',
  );
  $fields['user_facebook'] = array(
    'field_name' => 'user_facebook',
    'label' => t('Facebook url'),
    'type' => 'text',
  );
  $fields['user_google'] = array(
    'field_name' => 'user_google',
    'label' => t('Google Plus Profile Url'),
    'type' => 'text',
  );
  // text area without filters
  $fields['user_description'] = array(
    'field_name' => 'user_description',
    'label' => t('About author'),
    'type' => 'text_with_summary',
    'translatable' => '1',
    
  );
  
  return $fields;
}


function _author_profile_installed_instances()  {
  // textfield
  /*
   $instances['personal_data'] = array(
      'field_name' => 'personal_data', 
      'type' => 'fieldset',
      'title' => t('Personal Data'), 
      'collapsible' => TRUE, 
      'collapsed' => FALSE,
  );
  */
 
  
  $instances['user_name'] = array(
    'field_name' => 'user_name',
    'type' => 'text',
    'label' => t('Name'),
    'widget' => array(
      'type' => 'text_textfield',
      'weight' => '-1',
  	  'settings' => array(
                  'size' => '50',
                  'max_length' => '100',
        ),
    ),
    
  );
 
 $instances['user_surname'] = array(
    'field_name' => 'user_surname',
    'type' => 'text',
    'label' => t('Surname'),
    'widget' => array(
      'type' => 'text_textfield',
      'weight' => '-1',
      'settings' => array(
                'size' => '50',
                'max_length' => '100',
      ),
    ),
  );
 
 $instances['user_twitter'] = array(
    'field_name' => 'user_twitter',
    'type' => 'text',
    'label' => t('Twitter account'),
    'widget' => array(
      'type' => 'text_textfield',
      'weight' => '-1',
      'settings' => array(
                'size' => '150',
                'max_length' => '100',
      ),
    ),
  );
  
  $instances['user_facebook'] = array(
    'field_name' => 'user_facebook',
    'type' => 'text',
    'label' => t('Facebook url'),
    'widget' => array(
      'type' => 'text_textfield',
      'weight' => '-1',
      'settings' => array(
                'size' => '150',
                'max_length' => '100',
      ),
    ),
  );

   $instances['user_linkedin'] = array(
    'field_name' => 'user_linkedin',
    'type' => 'text',
    'label' => t('Linkedin url'),
    'widget' => array(
      'type' => 'text_textfield',
      'weight' => '-1',
      'settings' => array(
                'size' => '150',
                'max_length' => '100',
      ),
    ),
  );
  $instances['user_github'] = array(
    'field_name' => 'user_github',
    'type' => 'text',
    'label' => t('Github url'),
    'widget' => array(
      'type' => 'text_textfield',
      'weight' => '-1',
      'settings' => array(
                'size' => '150',
                'max_length' => '100',
      ),
    ),
  );
  $instances['user_google'] = array(
    'field_name' => 'user_google',
    'type' => 'text',
    'label' => t('Google Plus Profile url'),
    'widget' => array(
      'type' => 'text_textfield',
      'weight' => '-1',
      'settings' => array(
                'size' => '150',
                'max_length' => '100',
      ),
    ),
  );
 
  // textarea with filters
  $instances['user_description'] = array(
    'field_name' => 'user_description',
    'type' => 'text_long',
    'label' => t('About author'),
    'widget' => array('type' => 'text_textarea_with_summary'), 
    'settings' => array('display_summary' => TRUE),
    'required' => 1,
    
  );
 
  return $instances;
}


/**
 * Page callback
 * Shows the user profile
 */
function author_profile_profile_page($author_id=''){
   
  $author = user_load($author_id);
  
  
  $output = theme('author_profile_profile', 
          array(
            'user_name' => $author->name,
            'name' => _author_profile_get_full_name($author), 
            'email' => $author->mail, 
            'image' => _author_profile_get_image($author),
            'desc' => $author->user_description ? $author->user_description['und'][0]['safe_value'] : '',
            'uid' => $author->uid,
            'twitter' => 'https://twitter.com/' . $author->user_twitter ? $author->user_twitter['und'][0]['safe_value'] : '',
            'facebook' => $author->user_facebook ? $author->user_facebook['und'][0]['safe_value'] : '',
            'linkedin' => $author->user_linkedin ? $author->user_linkedin['und'][0]['safe_value'] : '',
            'github' => $author->user_github ? $author->user_github['und'][0]['safe_value'] : '',
            'google' => $author->user_google ? $author->user_google['und'][0]['safe_value'] : '',

          )
        );

  return $output;
}


/**
* Gets the author image
*/
function _author_profile_get_image($author) {
  // add user profile image
  $author_image = '';
  if (isset($author->picture->uri) && !empty($author->picture->uri)) {
    
    $author_image = theme_image_style(array(
      'style_name' => 'blog-author-image',
      'path' => $author->picture->uri,
      'width' => NULL,
      'height' => NULL,
      'alt' => t('User .') . _author_profile_get_name($author),
      'title' => t('User') . _author_profile_get_name($author),
      'attributes' => array('class' => 'photo'),
    ));
  }
  return $author_image;
}

function _author_profile_get_name($author) {
  $author_name = '';
  if ($author->user_name)
  {
    $author_name = $author->user_name['und'][0]['safe_value'];
    
  } 
  //$author->user_name['und'][0]['safe_value'] . " " . $author->user_surname['und'][0]['safe_value'];
  
  return $author_name;
}

function _author_profile_get_full_name($author) {
  $author_name = '';
  if ($author->user_name)
  {
    $author_name = $author->user_name['und'][0]['safe_value'];
    
  } 
  $author_name .=  $author->user_surname['und'][0]['safe_value'] !='' ? ' ' . $author->user_surname['und'][0]['safe_value'] : '';
  
  return $author_name;
}
/**
* Generates twitter button widget
*/
function _author_profile_twitter_widget($author) {
  
  $twitter_button_markup='';
  
  
  $twitter_account=$author->user_twitter ? $author->user_twitter['und'][0]['safe_value'] : null;
  
  if ($twitter_account) {
   
   
    $twitter_button_markup='<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\',\'twitter-wjs\');</script>';
   
    $twitter_button_markup.='<a href="https://twitter.com/' . $twitter_account .'" class="twitter-follow-button" 
      data-show-count="'. variable_get('author_profile_twitter_show_followers', 'false')  .'" 
      data-show-screen-name="' . variable_get('author_profile_twitter_show_screen_name', 0) .'" 
      data-lang="'. variable_get('author_profile_twitter_language', 'en') .'" 
      data-size="'. variable_get('author_profile_twitter_button_size', 'medium') .'" 
      data-dnt="'. variable_get('author_profile_twitter_opt_out', 'false') .'" 
      data-align="'. variable_get('author_profile_twitter_alignment', 'left') .'" 
      ';
      
      if (variable_get('author_profile_twitter_width')) {
        $twitter_button_markup.=' data-width="'. variable_get('author_profile_twitter_width') .'px" ';
      }
      $twitter_button_markup.=' >'.t('Follow') .' @ '. $twitter_account .'</a>';
  }

  
  return $twitter_button_markup;
}

/**
* Generates Google Plus button widget
*/
function _author_profile_google_widget($author) {
  
  $google_widget_markup='';
  
  $google_url=$author->user_google ? $author->user_google['und'][0]['safe_value'] : null;
  

  if ($google_url) {
   
    $google_widget_markup='<script type="text/javascript">
    window.___gcfg = {lang: \'es\'};
      (function() {
        var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
        po.src = \'https://apis.google.com/js/plusone.js\';
        var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    <div class="g-plus" data-href="' . $google_url . '" rel="author" data-width="169" height="131"></div>';
  }
  
  return $google_widget_markup;
}

