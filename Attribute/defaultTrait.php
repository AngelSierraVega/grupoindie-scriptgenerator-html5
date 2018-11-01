<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-05-19
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;
/**
 * Specifies that the track is to be enabled if the user's 
 * preferences do not indicate that another track would be more appropriate.
 * https://www.w3schools.com/tags/att_default.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait defaultTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getDefault() {
        return $this->getAttribute("default");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * @return self
     * 
     */      
    public function removeDefault() {
        $this->unsetAttribute("default");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setDefault($value) {
        $this->setAttribute("default", $value);
        return $this;
    }
}
