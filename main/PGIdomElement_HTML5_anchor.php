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
 * Description of PGIdomElement_HTML5_anchor
 *
 * @author Angel
 */
class PGIdomElement_HTML5_anchor extends PGIdomElement_HTML5 {

    /**
     * Descripción de PGIdomElement_HTML5_anchor
     *
     * @version alpha.03.02
     */
    function __construct() {
        try {
            $this->PGIsetTag("a");
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Descripción de PGIsetLink
     *
     * @version alpha.03.02
     */
    public function PGIsetLink($link, $text = null) {
        try {
            $this->PGIsetAttribute("href", $link);
            if ($text !== null) {
                $this->PGIpushText($text);
            }
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}
