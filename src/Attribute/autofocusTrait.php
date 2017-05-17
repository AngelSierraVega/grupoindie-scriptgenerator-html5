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
 * Specifies that the element should automatically get focus when the page loads,
 * can be used on the following elements:button, input, keygen, select, textarea.
 * @autofocus
 * https://www.w3schools.com/tags/att_autofocus.asp
 * 
 * @package    DML
 * @subpackage HTML5
 * @category   API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2017-05-17
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait autofocusTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getAccept() {
        return $this->getAttribute("autofocus");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeAccept() {
        $this->unsetAttribute("autofocus");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setAccept($value) {
        $this->setAttribute("autofocus", $value);
        return $this;
    }
}
