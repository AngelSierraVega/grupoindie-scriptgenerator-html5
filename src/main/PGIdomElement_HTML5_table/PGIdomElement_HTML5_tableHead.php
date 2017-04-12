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
 * Description of PGIdomElement_HTML5_tableHead
 *
 * @author Angel
 */
class PGIdomElement_HTML5_tableHead extends PGIdomElement_HTML5{

    //private $_rows;

    /**
     * Descripción de PGIdomElement_HTML5_tableHead
     *
     * @version alpha.03.01
     */
    function __construct(PGIdata_matrix $columns) {
        try {
            $this->PGIsetTag("thead");
            //$this->_rows = [];
            for ($i = 0; $i < $columns->PGIgetNumberRows(); $i++) {
                //$this->_rows[] = new PGIdomElement_HTML5_tableRow($columns->PGIgetRow($i));
                $this->PGIpushContent(new PGIdomElement_HTML5_tableRow($columns->PGIgetRow($i),TRUE));
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
