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
 * Description of PGIdomElement_HTML5_tableCell
 *
 * @version alpha.03.01
 */
class PGIdomElement_HTML5_tableCell extends PGIdomElement_HTML5 {

    //private $_colspan;
    //private $_rowspan;
    //private $_headers;
    protected $_data;

    /**
     * Descripción de PGIdomElement_HTML5_tableCell
     *
     * @version alpha.03.01
     */
    function __construct(PGIdata $data) {
        try {
            $this->PGIsetTag("td");
            //$this->PGIpushContent($content);
            $this->_data = $data->PGIgetValue();
            $this->PGIpushContent($this->_data);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Descripción de PGIgetRenderizedString
     *
     * @version alpha.03.01
     
    public function PGIgetRenderizedString($renderEntityNumber = FALSE) {
        try {

            $this->PGIpushText($this->_data);

            return parent::PGIgetRenderizedString($renderEntityNumber);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
    */
}
