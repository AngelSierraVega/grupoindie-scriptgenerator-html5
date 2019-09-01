<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-05-16
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;
/**
 * Specifies that the audio/video will start playing as soon as it is ready
 * https://www.w3schools.com/tags/att_autoplay.asp
 * 
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
