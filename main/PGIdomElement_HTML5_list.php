<?php

/*
 * Copyright (C) 2016 Angel
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Description of PGIdomElement_HTML5_list
 *
 * @author Angel
 */
class PGIdomElement_HTML5_list extends PGIdomElement{
    /**
     * Description of PGIdomElement_HTML5_list
     * 
     * @version alpha.03.32
     */
    function __construct($ordered = TRUE) {
        try {
            parent::__construct($ordered ? "ol" : "ul");
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }
    
    /**
     * Description of PGIaddListElement
     * 
     * @version alpha.03.32
     */
    public function PGIaddListElement($text) {
        try {
            $tmpListElement= new PGIdomElement_HTML5_listElement($text);
            return $this->PGIpushContent($tmpListElement);
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }
}

/**
 * Description of PGIdomElement_HTML5_listElement
 *
 * @author Angel
 */
class PGIdomElement_HTML5_listElement extends PGIdomElement{
    /**
     * Description of PGIdomElement_HTML5_listElement
     * 
     * @version alpha.03.32
     */
    function __construct($text) {
        try {
            parent::__construct("li");
            $this->PGIpushText($text);
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }

}
