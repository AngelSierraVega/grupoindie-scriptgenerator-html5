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
 * Specifies the types of files that the server accepts (that can be submitted through a file upload).
 * https://www.w3schools.com/tags/att_accept.asp
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
trait acceptTrait {

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getAccept() {
        return $this->getAttribute("accept");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * @return self
     * 
     */      
    public function removeAccept() {
        $this->unsetAttribute("accept");
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
        $this->setAttribute("accept", $value);
        return $this;
    }

}
