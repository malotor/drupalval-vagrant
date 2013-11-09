<?php
/**
 * @file
 * Provides a module tokes
 *
 *.
 */ 
/**
* Implements hook_token_info().
*/
function author_profile_token_info() {  
  $info['tokens']['node']['author_google'] = array(
    'name' => t('Author´s google'),
    'description' => t('Return de google plus author url'),
  );
  return $info;
}

/**
* Implements hook_tokens().
*/
function author_profile_tokens($type, $tokens, array $data = array(), array $options = array()) {
  
  $replacements = array();
  
  if ($type == 'node' && !empty($data['node'])) {
    
        
    foreach ($tokens as $name => $original) {
    
      switch ($name) {
        case 'author_google':
          
          $node = $data['node'];
          $author = user_load($node->uid);
          
          if ($author->uid!=0) {
            
             $replacements[$original] = $author->user_google ? $author->user_google['und'][0]['safe_value'] : '';
          }
                   
        break;
       
      }
    }
    
    
  }
  
  return $replacements;
}