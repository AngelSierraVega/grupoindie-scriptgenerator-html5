<?php

/**
 * 
 * 
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
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
 * Specifies the value of the element.
 * https://www.w3schools.com/tags/att_value.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait valueTrait
{

    /**
     * [description]
     * 
     * @since   GIG-HTML5.00.01
     */
    public function getValue()
    {
        return $this->getAttribute("value");
    }

    /**
     * @return $this
     * 
     * @since   GIG-HTML5.00.01
     */
    public function removeValue()
    {
        $this->unsetAttribute("value");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since   GIG-HTML5.00.01
     */
    public function setValue($value)
    {
        $this->setAttribute("value", $value);
        return $this;
    }

}
