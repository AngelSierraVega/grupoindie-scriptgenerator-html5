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
 * Description of PGIdomElement_HTML5_tableCellHeader
 *
 * @author Angel
 */
class PGIdomElement_HTML5_tableCellHeader extends PGIdomElement_HTML5_tableCell {

    //private $_abbr;
    //private $_scope;
    //private $_sorted;
    
    /**
     * Descripción de PGIdomElement_HTML5_tableCellHeader
     *
     * @version alpha.03.01
     */
    function __construct(PGIdata $data) {
        try {
            parent::__construct($data);
            $this->PGIsetTag("th");
            //$this->PGIpushContent($content);
            //$this->_data = $data->PGIgetValue();
            //$this->PGIpushText($this->_data);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}
