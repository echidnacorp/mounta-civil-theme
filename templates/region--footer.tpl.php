<?php

/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<?php if ($content): ?>
  <div class="<?php print $classes; ?>">
  	<div class="footer-break"></div>
    <?php print $content; ?>
      <div class="footer-logos">
      	<div class="logo-container">
  		  <div class="sponsor1"><a href="http://www.sshrc-crsh.gc.ca/home-accueil-eng.aspx"><img typeof="foaf:Image" src="/sites/spanishcivilwar.ca/themes/mounta-civil-theme/images/logos/sshrc_fip_wordmark_eng.gif" width="297" height="18" alt="" /></a></div> 
  		  <div class="sponsor2"><a href="http://www.dal.ca/"><img typeof="foaf:Image" src="/sites/spanishcivilwar.ca/themes/mounta-civil-theme/images/logos/01-DalLogoB%26Gld.jpg" width="84" height="28" alt="" /></a></div> 
  		  <div class="sponsor3"><a href="http://www.cwrc.ca/en/"><img typeof="foaf:Image" src="/sites/spanishcivilwar.ca/themes/mounta-civil-theme/images/logos/CWRC_logo_v075_nospill_noshading_thinnercontour.gif" width="44" height="25" alt="" /></a></div> 
  		  <div class="sponsor4"><a href="http://editingmodernism.ca/"><img typeof="foaf:Image" src="/sites/spanishcivilwar.ca/themes/mounta-civil-theme/images/logos/emic-2.gif" width="143" height="23" alt="" /></a></div>
 	  	</div>
 	</div> 
  </div>

<?php endif; ?>
