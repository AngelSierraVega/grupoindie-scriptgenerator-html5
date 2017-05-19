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
 * Specifies a URL to a document that explains the quote, or why the text was inserted/changed.
 * https://www.w3schools.com/tags/att_cite.asp
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
trait citeTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getCite() {
        return $this->getAttribute("cite");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeCite() {
        $this->unsetAttribute("cite");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setCite($value) {
        $this->setAttribute("cite", $value);
        return $this;
    }
}
