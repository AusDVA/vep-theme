<div id="wrapper">

    <div class="container hidden-print">
        <nav class="no-border" tabIndex="-1" autoFocus>
            <a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
        </nav>
        <div class="row">
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"">
            <div class="logo col-md-6 col-sm-6 col-xs-6"><img alt="Australian Coat of Arms" src="<?php print $directory; ?>/images/logo-gov.svg" />
            </div></a>
            <div class="col-md-2 col-xs-6 col-md-offset-2"><span class="beta">BETA</span></div>

            <div class="navbar-header col-md-1 col-xs-12 text-center">
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

        <?php echo theme('links__system_main_menu', array('links' => $main_menu)); ?>
		 <?php echo theme('links__system_mobile_menu', array('links' => $main_menu)); ?>
    </div>

    <header class="print-only" aria-hidden="true">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php print $directory; ?>/images/vepbanner.png" alt="Header image for printing purposes"></img>
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
