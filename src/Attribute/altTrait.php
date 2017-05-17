<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

/**
 * provides alternative information for an image if a user for some reason cannot view it (because of slow connection, an error in the src attribute, or if the user uses a screen reader).
 * @alt
 * https://www.w3schools.com/tags/att_alt.asp
 * 
 * @package    DML
 * @subpackage HTML5
 * @category   API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2017-05-16
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
namespace GIndie\Generator\DML\HTML5\Attribute;
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