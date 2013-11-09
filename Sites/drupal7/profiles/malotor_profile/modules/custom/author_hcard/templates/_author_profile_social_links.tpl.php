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

<div class="author_social_links">
 
  <ul>
    <?php if ($twitter): ?>
      <li><a class="twitter" href="<?php print $twitter; ?>" target="_blank">Twitter</a></li>
    <?php endif; ?>
    <?php if ($facebook): ?>
      <li><a class="facebook" href="<?php print $facebook; ?>" target="_blank">Facebook</a></li>
     <?php endif; ?>
    <?php if ($github): ?>
      <li><a class="github" href="<?php print $github; ?>" target="_blank">Github</a></li>
     <?php endif; ?>
    <?php if ($linkedin): ?>
      <li><a class="linkedin" href="<?php print $linkedin; ?>" target="_blank">Linkedin</a></li>
    <?php endif; ?>
    <?php if ($google): ?>
      <li><a class="google" href="<?php print $google; ?>?rel=author" target="_blank">Google Plus</a></li>
    <?php endif; ?>
  </ul>
 

</div>
  