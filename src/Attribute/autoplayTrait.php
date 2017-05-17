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
 * specifies the types of files that the server accepts (that can be submitted through a file upload).
 * @accept 
 * https://www.w3schools.com/tags/att_accept.asp
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
trait autoplayTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getAccept() {
        return $this->getAttribute("autoplay");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeAccept() {
        $this->unsetAttribute("autoplay");
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
        $this->setAttribute("autoplay", $value);
        return $this;
    }
}
