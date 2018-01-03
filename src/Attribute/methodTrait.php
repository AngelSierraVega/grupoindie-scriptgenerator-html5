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
 * Specifies the HTTP method to use when sending form-data.
 * @method
 * https://www.w3schools.com/tags/att_method.asp
 * 
 * @package    HTML5
 * @subpackage Main
 * @category   API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2017-05-19
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait methodTrait {
    /**
     * [description]
     * 
     * @since   GIG-HTML5.00.01
     */    
    public function getMethod() {
        return $this->getAttribute("method");
    }
    /**
     * @return $this
     * 
     * @since   GIG-HTML5.00.01
     */    
    public function removeMethod() {
        $this->unsetAttribute("method");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since   GIG-HTML5.00.01
     */
    public function setMethod($value) {
        $this->setAttribute("method", $value);
        return $this;
    }
}
