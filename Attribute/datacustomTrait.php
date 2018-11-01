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
 * Used to store custom data private to the page or application.
 * https://www.w3schools.com/tags/att_data-.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait datacustomTrait
{

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getDatacustom()
    {
        return $this->getAttribute("datacustom");
    }

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * @return self
     * 
     */
    public function removeDatacustom()
    {
        $this->unsetAttribute("datacustom");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setDatacustom($value)
    {
        $this->setAttribute("datacustom", $value);
        return $this;
    }

}
