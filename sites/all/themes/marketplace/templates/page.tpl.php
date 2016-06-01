<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * Adaptivetheme supplied variables:
 * - $site_logo: Themed logo - linked to front with alt attribute.
 * - $site_name: Site name linked to the homepage.
 * - $site_name_unlinked: Site name without any link.
 * - $hide_site_name: Toggles the visibility of the site name.
 * - $visibility: Holds the class .element-invisible or is empty.
 * - $primary_navigation: Themed Main menu.
 * - $secondary_navigation: Themed Secondary/user menu.
 * - $primary_local_tasks: Split local tasks - primary.
 * - $secondary_local_tasks: Split local tasks - secondary.
 * - $tag: Prints the wrapper element for the main content.
 * - $is_mobile: Mixed, requires the Mobile Detect or Browscap module to return
 *   TRUE for mobile.  Note that tablets are also considered mobile devices.
 *   Returns NULL if the feature could not be detected.
 * - $is_tablet: Mixed, requires the Mobile Detect to return TRUE for tablets.
 *   Returns NULL if the feature could not be detected.
 * - *_attributes: attributes for various site elements, usually holds id, class
 *   or role attributes.
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
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
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
 * Core Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * Adaptivetheme Regions:
 * - $page['leaderboard']: full width at the very top of the page
 * - $page['menu_bar']: menu blocks placed here will be styled horizontal
 * - $page['secondary_content']: full width just above the main columns
 * - $page['content_aside']: like a main content bottom region
 * - $page['tertiary_content']: full width just above the footer
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see adaptivetheme_preprocess_page()
 * @see adaptivetheme_process_page()
 */
global $base_url;
global $user;
$fixed_top = 'mainmenu-area navbar navbar-default navbar-fixed-top';
if($user->uid){
	if(in_array('administrator', $user->roles))
		$fixed_top = ''; 
	else if (in_array('Moderator', $user->roles))
		$fixed_top = ''; 
	else if (in_array('admin', $user->roles))
		$fixed_top = ''; 
	else if (in_array('Customer Care', $user->roles))
		$fixed_top = ''; 
	else 
		$fixed_top = 'mainmenu-area navbar navbar-default navbar-fixed-top';
}

?>
    <header>
	   <nav class="<?php print $fixed_top;?>">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand" href="<?php print $base_url;?>"><img src="<?php echo $base_url."/".drupal_get_path('theme', variable_get('theme_default', NULL));?>/img/market-place-logo.png" alt="logo"></a>
                </div> 
               
			   <!-- /#main-menu -->
			   <?php if ($main_menu): ?>
			     <div class="navbar-collapse collapse navbar-right">
					 <?php print theme('links__system_main_menu', array(
					   'links' => $main_menu,
					   'attributes' => array(
					   'id' => 'main-menu-links',
					   'class' => array('links', 'clearfix', 'nav', 'navbar-nav'),
					   ),
					  )); 
					 ?>
				</div>
			  <?php endif; ?>
			 <!-- /#main-menu -->
            </div>
        </div>
       </nav><!--/nav-->
   </header>
<div id="page-wrapper">
 <!-- !Leaderboard Region -->
  <div id="page" class="<?php print $classes; ?>">


    <!-- !Navigation -->
	<a id="menu-toggle" class="anchor-link" href="#" style="display:none;">Menu</a>
    <?php //print render($page['menu_bar']); ?>
    <?php //if ($primary_navigation): print $primary_navigation; endif; ?>
    <?php //if ($secondary_navigation): print $secondary_navigation; endif; ?>

    <!-- !Breadcrumbs -->
    <!-- <?php if ($breadcrumb): print $breadcrumb; endif; ?> -->

    <!-- !Messages and Help -->
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <!-- !Secondary Content Region -->
    <?php print render($page['secondary_content']); ?>


          <!-- !Highlighted region -->
          <?php print render($page['highlighted']); ?>

           <?php print render($title_prefix); // Does nothing by default in D7 core ?>

            <!-- !Main Content Header -->
            <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
				<?php (arg(0) != 'all-category') ? print '<h2>'.$title. '</h2>' : '';?>
                <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                  <div id="tasks">

                    <?php if ($primary_local_tasks): ?>
                      <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($secondary_local_tasks): ?>
                      <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($action_links = render($action_links)): ?>
                      <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                    <?php endif; ?>

                  </div>
                <?php endif; ?>

             
            <?php endif; ?>

            <!-- !Main Content -->
			 <?php if ($tabs && $user->uid): ?>
			  <div class="tabs">
                <?php print render($tabs); ?>
              </div>
             <?php endif; ?>
             <?php print render($page['help']); ?>
               <?php if ($action_links): ?>
                 <ul class="action-links">
                   <?php print render($action_links); ?>
                 </ul>
             <?php endif; ?>
            <?php if ($content = render($page['content'])): ?>
              <div id="content" class="region">
                <?php print $content; ?>
              </div>
            <?php endif; ?>

            <!-- !Feed Icons -->
            <?php print $feed_icons; ?>

            <?php print render($title_suffix); // Prints page level contextual links ?>

          </<?php print $tag; ?>><!-- /end #main-content -->

          <!-- !Content Aside Region-->
          <?php print render($page['content_aside']); ?>

     
    <!-- !Tertiary Content Region -->
    <?php print render($page['tertiary_content']); ?>
   
  </div>
   <!-- !Footer -->
	<?php if ($page['footer']): ?>    
	  <div class="footer-top-area">
		<div class="container">
		  <div class="row">
			<?php print render($page['footer']); ?>
		  </div>
		</div>
	  </div> <!-- End footer bottom area -->
	<?php endif; ?>
   <!-- End footer top area -->
	<?php if ($page['footer_secondcolumn']): ?>    
		<div class="footer-bottom-area">
			<div class="container">
				<div class="row">
					<?php print render($page['footer_secondcolumn']); ?>
				</div>
			</div>
		</div> <!-- End footer bottom area -->
	<?php endif; ?>
</div>
