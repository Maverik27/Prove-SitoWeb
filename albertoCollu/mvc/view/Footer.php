<?php

/**
 * Description of Footer
 *
 * @author Banana Joe
 */
class Footer {

    private $info;

    function __construct() {
        $this->info = "<div class=\"info\"><p>\tCopyright &copy; 2014 - Tecno Shop. Tutti i Diritti riservati. "
                . "Webdesign <a href=\"mailto:albe.collu@gmail.com\"> Alberto Collu</a></p></div>\n";
    }

    public function __toString() {

        $html = "<div id=\"footer\">";
        $html.= $this->info;
        $html.="</div>";
        return $html;
    }

}
