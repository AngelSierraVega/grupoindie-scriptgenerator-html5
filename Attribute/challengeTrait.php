<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-05-17
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;
/**
 * Specifies that the value of the <keygen> element will be challenged when submitted.
 * https://www.w3schools.com/tags/att_challenge.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait challengeTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getChallenge() {
        return $this->getAttribute("challenge");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */      
    public function removeChallenge() {
        $this->unsetAttribute("challenge");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setChallenge($value) {
        $this->setAttribute("challenge", $value);
        return $this;
    }
}
