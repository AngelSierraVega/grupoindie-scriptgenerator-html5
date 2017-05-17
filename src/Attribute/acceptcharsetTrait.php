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
 * sspecifies the character encodings that are to be used for the form submission.
 * @accept-charset
 * https://www.w3schools.com/tags/att_accept-charset.asp
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
namespace GIndie\Generator\DML\HTML5\Attribute;
trait acceptcharsetTrait {

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getAcceptcharset() {
        return $this->getAttribute("accept-charset");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeAcceptcharset() {
        $this->unsetAttribute("accept-charset");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setAcceptcharset($value) {
        $this->setAttribute("accept-charset", $value);
        return $this;
    }

}