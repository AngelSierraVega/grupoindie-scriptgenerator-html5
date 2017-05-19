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
 * Specifies a shortcut key to activate/focus an element.
 * https://www.w3schools.com/tags/att_accesskey.asp
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
trait accesskeyTrait {

    /**
     * [description]
     * 
     * @since   GIG-HTML5.00.01
     */    
    public function getAccesskey() {
        return $this->getAttribute("accesskey");
    }
    /**
     * [description]
     * 
     * @since   GIG-HTML5.00.01
     */
    public function removeAccesskey() {
        $this->unsetAttribute("accesskey");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since   GIG-HTML5.00.01
     */
    public function setAccesskey($value) {
        $this->setAttribute("accesskey", $value);
        return $this;
    }

}