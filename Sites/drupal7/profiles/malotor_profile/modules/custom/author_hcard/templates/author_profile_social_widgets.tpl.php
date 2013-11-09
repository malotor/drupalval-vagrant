<?php
/**
 * @file
 * Template file for themeing author vprofile
 *
 * Available custom variables:
 * - $name: A string containing the pre-rendered form.
 * - $email: An array of form elements keyed by the element name.
 * - $image: An array of form elements keyed by the element name.
 */ 
?>
<div id="author_social_links" class="author_social_links">
  <?php if ($twitter_widget): ?>
  <div class="author_social_links_item author_social_links_twitter">
     <?php print $twitter_widget; ?>
  </div>
  <?php endif; ?>
  <?php if ($google_widget): ?>
  <div class="author_social_links_item author_social_links_google">
     <?php print $google_widget; ?>
  </div>
 <?php endif; ?>
  
</div>