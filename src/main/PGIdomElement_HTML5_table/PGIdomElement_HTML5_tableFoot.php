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
 * Description of PGIdomElement_HTML5_tableFoot
 *
 * @author Angel
 */
class PGIdomElement_HTML5_tableFoot {

    //private $_rows;

    /**
     * Descripción de PGIdomElement_HTML5_tableFoot
     *
     * @version alpha.03.01
     */
    function __construct(PGIdata_matrix $foot) {
        try {
            $this->PGIsetTag("tfoot");
            //$this->_rows = [];
            for ($i = 0; $i < $foot->PGIgetNumberRows(); $i++) {
                //$this->_rows[] = new PGIdomElement_HTML5_tableRow($foot->PGIgetRow($i));
                $this->PGIpushContent(new PGIdomElement_HTML5_tableRow($foot->PGIgetRow($i)));
            }
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Descripción de PGIgetRenderizedString
     *
     * @version alpha.03.01
     
    public function PGIgetRenderizedString($renderEntityNumber) {
        try {
            foreach ($this->_rows as $row) {
                $this->PGIpushContent($row);
            }
            return parent::PGIgetRenderizedString($renderEntityNumber);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
*/
}
