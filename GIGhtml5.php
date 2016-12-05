<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */

/**
 * Description of GIGhtml5
 *
 * @author Angel
 */
class GIGhtml5 extends GIGnode {

    /**
     * 
     * @version GIGnode.alpha.00.00
     * @todo ...
     */
    protected function _openTagToString($entityNumber) {
        try {
            $_rtnStr = "";
            $openSimbol = "<";
            if ($this->getEmptyNode() == true) {
                $closeSimbol = " />";
            } else {
                $closeSimbol = ">";
            }
            if ($entityNumber === TRUE) {
                $openSimbol = "&#60;";
                if ($this->getEmptyNode() == true) {
                    $closeSimbol = "&#32;&#47;&#62;";
                } else {
                    $closeSimbol = "&#62;";
                }
            }
            if ($this->_tag !== null) {
                $strTag = $this->_tag;
                $strAttributes = $this->_constructStringAttributes();
                $_rtnStr = $openSimbol . $strTag . $strAttributes . $closeSimbol;
            }
            return $_rtnStr;
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}
