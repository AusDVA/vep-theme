<?php
    function veptheme_links__system_main_menu($variables) {
        $html = "<nav>\n";
        $html .= "  <div class=\"collapse navbar-collapse\" id=\"main-nav\">\n";
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


