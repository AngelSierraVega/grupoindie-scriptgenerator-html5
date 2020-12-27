<?php

/**
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
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
 * Specifies an alternate text when the original element fails to display.
 * https://www.w3schools.com/tags/att_alt.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait altTrait
{

    /**
     * 
     * 
     */
    public function getAlt()
    {
        return $this->getAttribute("alt");
    }

    /**
     * 
     */
    public function removeAlt()
    {
        $this->unsetAttribute("alt");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     */
    public function setAlt($value)
    {
        $this->setAttribute("alt", $value);
        return $this;
    }

}
