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
 * https://www.w3schools.com/tags/att_contextmenu.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait crossoriginTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getCrossorigin() {
        return $this->getAttribute("crossorigin");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * @return self
     * 
     */      
    public function removeCrossorigin() {
        $this->unsetAttribute("crossorigin");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setCrossorigin($value) {
        $this->setAttribute("crossorigin", $value);
        return $this;
    }
}
