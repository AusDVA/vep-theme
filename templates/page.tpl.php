<?php if ($page['banner']): ?>
        <div id="beta-banner">
            <?php print render($page['banner']); ?>
        </div>
    <?php endif; ?>

<div id="wrapper">

    <div class="container hidden-print">
	
        <nav class="no-border" tabindex="-1">
            <a id="skip" href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
        </nav>
        <div class="row">
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <div class="logo col-md-6 col-sm-6 col-xs-6"><img alt="Australian Coat of Arms" src="<?php print $directory; ?>/images/logo-gov.svg" />
            </div></a>
            

            <div class="navbar-header col-md-6 col-sm-4 col-xs-12 text-center">
			<div class="row col-xs-offset-6">
              <div id="subcribe-mobile"><a href="https://eepurl.com/c-ABGj" target="_blank" rel="noopener"><span class="subcribe-mobile">SUBSCRIBE</span>
              <span class="sr-only">(this link will open in a new tab)</span></a></div>

            </div>
			<div class="row">
                <button id="mobile-button" type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#mobile-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <a href="#"><p class="mobile-menu text-center">Menu
                            <span
                                    id="glyphicon" class="glyphicon glyphicon-chevron-down rotate-down"
                            aria-hidden="true"></span></p></a>
                </button>
				</div>
            </div>
        </div>

        <?php echo theme('links__system_main_menu', array('links' => $main_menu)); ?>
		 <?php echo theme('links__system_mobile_menu', array('links' => $main_menu)); ?>
    </div>

    <header class="print-only" aria-hidden="true">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php print $directory; ?>/images/vepbanner.png" alt="Header image for printing purposes"/>
            </div>
        </div>
    </header>
    <div class="hidden-print" id="header">
        <header class="vep-branding">
            <div class="container">
                <img src="<?php print $directory; ?>/images/banner4.png" alt="Prime Minister's Veterans' Employment Program"/>
            </div>
        </header>
    </div>

    <div id="content">
        <?php print render($messages); ?>
        <?php if ($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

        <?php print render($page['content']); ?>
    </div>

    <?php if ($page['sidebar_first']): ?>
        <div id="sidebar">
            <?php print render($page['sidebar_first']); ?>
        </div>
    <?php endif; ?>

    <div id="footer">
        <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
        <?php endif; ?>
    </div>

</div>
