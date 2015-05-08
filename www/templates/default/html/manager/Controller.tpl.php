<?php
if (!isset($GLOBALS['unl_template_dependents'])) {
    $GLOBALS['unl_template_dependents'] = $_SERVER['DOCUMENT_ROOT'];
}

$view_class = str_replace('\\', '_', strtolower($context->options['model']));
?>
<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="ie iem7"><![endif]-->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7) ]><html class="ie" lang="en"><![endif]-->
<!--[if !(IEMobile) | !(IE)]><!--><html lang="en"><!-- InstanceBegin template="/Templates/fixed.dwt" codeOutsideHTMLIsLocked="false" --><!--<![endif]-->
<head>
    <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/metanfavico.html'; ?>
    <!--
        Membership and regular participation in the UNL Web Developer Network
        is required to use the UNL templates. Visit the WDN site at
        http://wdn.unl.edu/. Click the WDN Registry link to log in and
        register your unl.edu site.
        All UNL template code is the property of the UNL Web Developer Network.
        The code seen in a source code view is not, and may not be used as, a
        template. You may not use this code, a reverse-engineered version of
        this code, or its associated visual presentation in whole or in part to
        create a derivative work.
        This message may not be removed from any pages based on the UNL site template.

        $Id: fixed.dwt | 252c2891a48c70db689be6d897d4f34768b8258a | Thu Aug 1 15:08:19 2013 -0500 | Kevin Abel  $
    -->
    <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/scriptsandstyles.html'; ?>
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>UNL Events Manager</title>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="head" -->
    <!-- Place optional header elements here -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_frontend_url ?>templates/default/html/css/events.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_frontend_url ?>templates/default/html/css/manager.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_frontend_url ?>templates/default/html/css/jquery-ui.min-custom.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <script id="script_main" src="<?php echo $base_frontend_url ?>templates/default/html/js/events.min.js"></script>    
    <!-- InstanceEndEditable -->
    <!-- InstanceParam name="class" type="text" value="" -->
</head>
<body class="terminal" data-version="4.0">
<?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/skipnav.html'; ?>
<div id="wdn_wrapper">
    <input type="checkbox" id="wdn_menu_toggle" value="Show navigation menu" class="wdn-content-slide wdn-input-driver" />
    <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/noscript-padding.html'; ?>
    <header id="header" role="banner" class="wdn-content-slide wdn-band">
        <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/wdnResources.html'; ?>
        <div class="wdn-inner-wrapper">
            <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/logo.html'; ?>
            <div id="wdn_resources">
                <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/idm.html'; ?>
                <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/wdnTools.html'; ?>
            </div>
            <span id="wdn_institution_title">University of Nebraska&ndash;Lincoln</span>
        </div>
        <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/apps.html'; ?>
        <div class="wdn-inner-wrapper">
            <div id="wdn_site_title">
            </div>
        </div>
    </header>
    <div id="wdn_navigation_bar" role="navigation" class="wdn-band">
        <nav id="breadcrumbs" class="wdn-inner-wrapper">
            <!-- WDN: see glossary item 'breadcrumbs' -->
            <h3 class="wdn_list_descriptor wdn-text-hidden">Breadcrumbs</h3>
            <!-- InstanceBeginEditable name="breadcrumbs" -->
            <!-- InstanceEndEditable -->
        </nav>
        <div id="wdn_navigation_wrapper">
            <nav id="navigation" role="navigation" class="wdn-band">
                <h3 class="wdn_list_descriptor wdn-text-hidden">Navigation</h3>
                <!-- InstanceBeginEditable name="navlinks" -->
                <!-- InstanceEndEditable -->
                <label for="wdn_menu_toggle" class="wdn-icon-menu">Menu</label>
            </nav>
        </div>
    </div>
    <!-- Navigation Trigger -->
    <div class="wdn-menu-trigger wdn-content-slide">
        <label for="wdn_menu_toggle" class="wdn-icon-menu">Menu</label>
    </div>
    <!-- End navigation trigger -->
    <div id="wdn_content_wrapper" role="main" class="wdn-content-slide">
        <div class="wdn-band">
            <div class="wdn-inner-wrapper">
                <div id="pagetitle">
                    <!-- InstanceBeginEditable name="pagetitle" -->
                    <!-- InstanceEndEditable -->
                </div>
            </div>
        </div>
        <div id="maincontent" class="wdn-main">
            <!--THIS IS THE MAIN CONTENT AREA; WDN: see glossary item 'main content area' -->
            <!-- InstanceBeginEditable name="maincontentarea" -->
            <div class="wdn-band view-<?php echo $view_class; ?> band-results">
                <div class="wdn-inner-wrapper">
                    <?php
                        $template = null;
                        if ($context->output->getRawObject() instanceof Exception) {
                            $template = 'Exception.tpl.php';
                        }
                        echo $savvy->render($context->output, $template);
                    ?>
                </div>
            </div>
            <!-- InstanceEndEditable -->
            <!--THIS IS THE END OF THE MAIN CONTENT AREA.-->
        </div>
    </div>
    <div class="wdn-band wdn-content-slide" id="wdn_optional_footer">
        <div class="wdn-inner-wrapper">
            <!-- InstanceBeginEditable name="optionalfooter" -->
            <!-- InstanceEndEditable -->
        </div>
    </div>
    <footer id="footer" role="contentinfo" class="wdn-content-slide">
        <div class="wdn-band" id="wdn_footer_related">
            <div class="wdn-inner-wrapper">
                <!-- InstanceBeginEditable name="leftcollinks" -->
                <!-- InstanceEndEditable -->
            </div>
        </div>
        <div class="wdn-band">
            <div class="wdn-inner-wrapper">
                <div class="footer_col" id="wdn_footer_contact">
                    <h3>Contact Us</h3>
                    <div class="wdn-contact-wrapper">
                        <!-- InstanceBeginEditable name="contactinfo" -->
                        <!-- InstanceEndEditable -->
                    </div>
                </div>
                <div id="wdn_copyright">
                    <div class="wdn-footer-text">
                        <!-- InstanceBeginEditable name="footercontent" -->
                        Powered by <a href="http://code.google.com/p/unl-event-publisher/">UNL Event Publisher</a>. Yeah, it's open source<br />
                        &copy; <?php echo date('Y'); ?> University of Nebraska&ndash;Lincoln
                        <!-- InstanceEndEditable -->
                        <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/wdn.html'; ?>
                    </div>
                    <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/logos.html'; ?>
                </div>
            </div>
        </div>
        <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/footer_floater.html'; ?>
    </footer>
    <?php include_once $GLOBALS['unl_template_dependents'].'/wdn/templates_4.0/includes/noscript.html'; ?>
</div>
</body>
<!-- InstanceEnd --></html>