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
 * Specifies that the audio/video will start playing as soon as it is ready
 * https://www.w3schools.com/tags/att_autoplay.asp
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
trait autoplayTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getAutoplay() {
        return $this->getAttribute("autoplay");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeAutoplay() {
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
    public function setAutoplay($value) {
        $this->setAttribute("autoplay", $value);
        return $this;
    }
}
