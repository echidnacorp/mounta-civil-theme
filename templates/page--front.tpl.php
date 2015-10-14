<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<!-- page -->
<div id="page">


<!-- header section -->
  <header id="header" role="banner">
    <?php print render($page['header']); ?>

    <!-- print the logo -->
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    <?php endif; ?>

    <!-- print the site name and slogan -->
    <?php if ($site_name): ?>
      <hgroup id="name-and-slogan">

    <!-- site slogan and background shape container -->
    <?php if ($site_slogan): ?>
      <div class="site-slogan-container">
          
        <!--black header background-->
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="380px" height="55px" viewBox="0 0 380 55" enable-background="new 0 0 380 55" xml:space="preserve">
        <polygon points="350.076,55 1,55 27.929,1 379,1 "/>
          <switch>
            <foreignObject>
                <p>Fallback image</p>
                <img src="/sites/spanishcivilwar.ca/themes/mounta-civil-theme/images/intro-bck.png" >
            </foreignObject>
          </switch>
        </svg>

        <!-- the slogan text -->
        <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
      </div><!-- /site slogan container -->

        <!-- site name -->
      <?php if ($site_name): ?>
          <h1 id="site-name">
            <span>Canadian Cultural History About The Spanish Civil War</span>
          </h1>
    <?php endif; ?>

    <?php endif; ?>
      </hgroup><!-- /#name-and-slogan -->
    <?php endif; ?>

  </header>

<div class="main-content-container">
  <!-- front block navigation -->

    <div id="navigation" class="front-image-blocks">
      
        <nav id="main-menu" role="navigation">
          <ul class="menu">
            <li class="introduction">
              <a href="introduction" class="title">Introduction</a>
              <div class="sub-text"><p><a href="introduction">Welcome to the Virtual Research Environment on Canada’s cultural involvement with the Spanish Civil War. <span class="more">More ></span></a></p></div>
            </li>
            <li class="primary-sources">
              <a href="/islandora/object/emic:cscw" class="title">Primary Sources</a>
              <div class="sub-text"><a href="/islandora/object/emic:cscw"><p>Bringing Canadian cultural materials about Spain to a wider audience. <span class="more">More ></span></a></p></div>
            </li>
            <li class="case-studies">
              <a href="case-studies" class="title">Case Studies & Interviews</a>
              <div class="sub-text"><p><a href="case-studies">Scholarship on our primary sources and other cultural engagement with the Spanish Civil War. <span class="more">More ></span></a></p></div>
            </li>
            <li class="teaching-tools">
              <a href="teaching-modules" class="title">Teaching Modules</a>
              <div class="sub-text"><p><a href="teaching-modules">Resources for teaching Canadian materials about the Spanish Civil War at the secondary and post-secondary levels. <span class="more">More ></span></a></p></div>
            </li>
            <li class="news small-box">
              <a href="news" class="title">News</a>
              <div class="sub-text"><p><a href="news">Announcing our series of print editions with the University of Ottawa Press. <span class="more">More ></span></a></p></div>
            </li>
            <li class="volunteers small-box">
              <a href="node/20" class="title">Volunteers</a>
              <div class="sub-text"><p><a href="node/20">Learn about the Canadians who volunteered with the International Brigades in Spain. <span class="more">More ></span></a></p></div>
            </li>
          </ul>
        </nav> 

    </div><!-- /#navigation -->


  <!--- sidebar primary -->
  <?php if ($secondary_menu): ?>
    <aside class="sidebar primary">
      <nav id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

      <?php print render($page['navigation']); ?>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
    ?>

    <?php if ($sidebar_first): ?>
      
        <?php print $sidebar_first; ?>
    </aside> <!--- /sidebar primary-->
    <?php endif; ?>
    

  <!-- main content -->  
  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if (user_is_logged_in() && $show_messages && $messages): print $messages; endif; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div><!-- /#content -->
  </div><!-- /#main -->


    <!-- sidebar secondary -->
    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_second): ?>
      <aside class="sidebar secondary">
        <?php print $sidebar_second; ?>
      </aside> <!--- /sidebar secondary -->
    <?php endif; ?>
 
</div><!-- /main-contenet-container -->

  <!-- Footer -->
  <div id="footer">
  <?php print render($page['footer']); ?>
  </div><!-- /Footer-->

</div><!-- /#page -->

<?php print render($page['bottom']); ?>
