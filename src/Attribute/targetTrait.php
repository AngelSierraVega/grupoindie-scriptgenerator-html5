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
 * Specifies the target for where to open the linked document or where to submit the form
 * https://www.w3schools.com/tags/att_target.asp
 * 
 * @package    HTML5
 * @subpackage Main
 * @category   API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2017-05-18
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait targetTrait {
    /**
     * [description]
     * 
     * @since   GIG-HTML5.00.01
     */    
    public function getTarget() {
        return $this->getAttribute("target");
    }
    /**
     * @return $this
     * 
     * @since   GIG-HTML5.00.01
     */    
    public function removeTarget() {
        $this->unsetAttribute("target");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since   GIG-HTML5.00.01
     */
    public function setTarget($value) {
        $this->setAttribute("target", $value);
        return $this;
    }
}
