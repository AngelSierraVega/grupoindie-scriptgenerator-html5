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
 * Specifies an alternate text when the original element fails to display.
 * https://www.w3schools.com/tags/att_alt.asp
 * 
 * @package    HTML5
 * @subpackage Main
 * @category   API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2017-05-16
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */

trait altTrait {

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getAlt() {
        return $this->getAttribute("alt");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeAlt() {
        $this->unsetAttribute("alt");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setAlt($value) {
        $this->setAttribute("alt", $value);
        return $this;
    }

}