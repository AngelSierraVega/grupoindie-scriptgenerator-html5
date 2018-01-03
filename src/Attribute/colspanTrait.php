<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;
/**
 * Specifies the number of columns a table cell should span.
 * https://www.w3schools.com/tags/att_colspan.asp
 * 
 * @package    HTML5
 * @subpackage Main
 * @category   API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2017-05-17
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait colspanTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getColspan() {
        return $this->getAttribute("colspan");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeColspan() {
        $this->unsetAttribute("colspan");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setColspan($value) {
        $this->setAttribute("colspan", $value);
        return $this;
    }
}
