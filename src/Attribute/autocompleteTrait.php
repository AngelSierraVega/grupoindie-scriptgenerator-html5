<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Attribute;
/**
 * Specifies whether the <form> or the <input> element should have autocomplete enabled
 * @autocomplete 
 * https://www.w3schools.com/tags/att_autocomplete.asp
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
trait autocompleteTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getAutocomplete() {
        return $this->getAttribute("autocomplete");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeAutocomplete() {
        $this->unsetAttribute("autocomplete");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setAutocomplete($value) {
        $this->setAttribute("autocomplete", $value);
        return $this;
    }
}
