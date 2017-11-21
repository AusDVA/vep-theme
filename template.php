<?php
    function veptheme_links__system_main_menu($variables) {
        $html = "<nav>\n";
        $html .= "  <div class=\"collapse navbar-collapse\" id=\"main-nav\">\n";
        $html .= "    <ul class=\"nav navbar-nav text-center\">\n";
        foreach ($variables['links'] as $link) {
            $html .= "<li>".l($link['title'], $link['href'], $link)."</li>";
        }
		$html .= "<li id='subcribe'><a href='https://eepurl.com/c-ABGj' target='_blank' rel='noopener'><span class='subcribe'>SUBSCRIBE</span> <span class='sr-only'>(this link will open in a new tab)</span></a></li>";
        $html .= "    </ul>\n";
        $html .= "  </div>\n";
        $html .= "</nav>\n";
		

        return $html;
    }
?>



<?php
    function veptheme_links__system_mobile_menu($variables) {
        $html = "<nav class=\"mobile-nav\">\n";
        $html .= "  <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">\n";
        $html .= "    <ul class=\"nav navbar-nav text-center\">\n";
        foreach ($variables['links'] as $link) {
            $html .= "<li>".l($link['title'], $link['href'], $link)."</li>";
        }
				
        $html .= "    </ul>\n";
        $html .= "  </div>\n";
        $html .= "</nav>\n";
		

        return $html;
    }
?>

<?php
function veptheme_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id = 'webform-client-form-49') {
    $form['actions']['submit']['#attributes']['class'][] = 'btn btn-default';
  }
}


?>


