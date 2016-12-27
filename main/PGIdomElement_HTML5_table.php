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
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_table/PGIdomElement_HTML5_tableCell.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_table/PGIdomElement_HTML5_tableCellHeader.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_table/PGIdomElement_HTML5_tableRow.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_table/PGIdomElement_HTML5_tableBody.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_table/PGIdomElement_HTML5_tableHead.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_table/PGIdomElement_HTML5_tableFoot.php';

/**
 * Description of PGIdomElement_HTML5_table
 * Sistematizar y Automatizar elementos mínimos para contrucción de una 
 * tabla en HTML5
 * @version alpha.03.01
 */
class PGIdomElement_HTML5_table extends PGIdomElement_HTML5 {

    private $_caption;
    private $_colgroup;
    private $_table;
    private $_tbody;
    private $_tfoot;
    private $_thead;

    /**
     * Descripción de PGIdomElement_HTML5_table
     * Sistematizar y Automatizar elementos mínimos para contrucción de una 
     * tabla en HTML5
     * @version alpha.03.01
     */
    function __construct(PGIdata_table $table) {
        try {
            $this->PGIsetTag("table");
            $this->PGIsetBorder();
            $this->PGIsetBorderCollapse();
            $this->_table = $table;
            $this->_caption = null;
            $this->_colgroup = [];
            
            if($table->PGIgetHead() !== NULL){
                $this->_thead = new PGIdomElement_HTML5_tableHead($table->PGIgetHead());
                $this->PGIpushContent($this->_thead);
            }
            $this->_tbody = new PGIdomElement_HTML5_tableBody($table->PGIgetMatrix());
            $this->PGIpushContent($this->_tbody);
            
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
    
    /**
     * Descripción de PGIsetBorder
     * 
     * @version alpha.03.01
     */
    public function PGIsetBorder($border = TRUE) {
        try {
            switch ($border) {
                case TRUE:
                    $this->PGIsetAttribute("border", "1");
                    break;
                case NULL:
                case FALSE:
                    $this->PGIsetAttribute("border", "0");
                    break;
                default:
                    $this->PGIsetAttribute("border", "$border");
                    break;
            }
            return TRUE;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
    
    /**
     * Descripción de PGIsetBorderCollapse
     * 
     * @version alpha.03.01
     */
    public function PGIsetBorderCollapse($borderCollapse = TRUE) {
        try {
            switch ($borderCollapse) {
                case TRUE:
                    $this->PGIsetAttribute("border-collapse", "collapse");
                    break;
                case NULL:
                case FALSE:
                    $this->PGIsetAttribute("border-collapse", "0");
                    break;
            }
            return TRUE;
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
      return parent::PGIgetRenderizedString($renderEntityNumber);
      } catch (Exception $e) {
      PGIdomBuilder_plataform::AlertError($e);
      }
      }
     */
}
