<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html lang="en">

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title>Prime Minister's Veterans' Employment Program</title>

  <?php print $styles; ?>
  <?php print $scripts; ?>
  
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="identifier-URL" content="http://www.veteransemployment.gov.au" />
      <meta name="description"
            content="The Prime Minister launched the Veterans' Employment Program on 17 November 2016 to raise
                     awareness of the unique skills and experience that veterans can bring to the civilian workplace and
                     promote greater employment opportunities for veterans in the private sector. The program will deliver
                     a number of initiatives across both the private and public sectors and will bring together information
                     from across government and industry to support the employment of veterans." />
      <meta name="keywords" content="Prime Minister's Veterans' Employment Program, VEP, veterans, employment, ESO, Industry Advisory Committee on Veterans' Employment, IAC, veterans employment, ESO, ESO Industry Partnership Register, ex-service-organisations" />
      <meta name="subject" content="employment, employment opportunities, employment services, awards, employees, employers" />
      <meta name="creator" content="Department of Veterans' Affairs" />
      <meta name="type" content="Text" />
      <meta name="dcterms.title" content="Prime Minister's Veterans' Employment Program" />
      <meta name="dcterms.type" content="Text" />
      <meta name="dcterms.format" content="text/html" />
      <meta name="dcterms.identifier" content="http://www.veteransemployment.gov.au" />
</head>
<body id="container">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

</body>
</html>
