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
 * Specifies a context menu for an element.
 * https://www.w3schools.com/tags/att_contextmenu.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait contextmenuTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getContextmenu() {
        return $this->getAttribute("contextmenu");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * @return self
     * 
     */      
    public function removeContextmenu() {
        $this->unsetAttribute("contextmenu");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setContextmenu($value) {
        $this->setAttribute("contextmenu", $value);
        return $this;
    }
}
