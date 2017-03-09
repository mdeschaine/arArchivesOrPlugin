<?php echo get_component_slot('header') ?>

<?php echo get_component('default', 'updateCheck') ?>

<div id="header">

  <div class="container">

    <div id="header-lvl1">
      <div class="row">
        <div class="span12">
			<?php if ($sf_user->isAuthenticated()): ?>
				<nav>
					<?php echo get_component('menu', 'userMenu') ?>
					<?php echo get_component('menu', 'quickLinksMenu') ?>
					<?php echo get_component('menu', 'changeLanguageMenu') ?>
					<?php echo get_component('menu', 'clipboardMenu') ?>
					<?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
				</nav>
			<?php else: ?>
				<nav>
					<?php echo get_component('menu', 'userMenu') ?>
					<?php echo get_component('menu', 'quickLinksMenu') ?>
					<?php echo get_component('menu', 'changeLanguageMenu') ?>
					<?php echo get_component('menu', 'clipboardMenu') ?>
				</nav>
			<?php endif; ?>


        </div>
      </div>
    </div>

    <div id="header-lvl2">
      <div class="row">

        <div id="logo-and-name" class="span6">
          <?php if ('fr' == $sf_user->getCulture()): ?>
            <h1><?php echo link_to(image_tag('/plugins/arArchivesOrPlugin/images/logo-long.png', array('alt' => __('OHS Digital Collections'))), 'http://172.30.200.90/', array('rel' => 'home')) ?></h1>
          <?php else: ?>
            <h1><?php echo link_to(image_tag('/plugins/arArchivesOrPlugin/images/logo-long.png', array('alt' => __('OHS Digital Collections'))), 'http://172.30.200.90/', array('rel' => 'home')) ?></h1>
          <?php endif; ?>
        </div>

        <div id="header-search" class="span6">
          <?php echo get_component('search', 'box') ?>
        </div>

      </div>
    </div>

  </div>

</div>
