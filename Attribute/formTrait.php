<?php

/**
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
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
 * Specifies the name of the form the element belongs to.
 * https://www.w3schools.com/tags/att_form.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait formTrait
{

    /**
     * [description]
     * 
     * @since   GIG-HTML5.00.01
     */
    public function getForm()
    {
        return $this->getAttribute("form");
    }

    /**
     * @return $this
     * 
     * @since   GIG-HTML5.00.01
     */
    public function removeForm()
    {
        $this->unsetAttribute("form");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since   GIG-HTML5.00.01
     */
    public function setForm($value)
    {
        $this->setAttribute("form", $value);
        return $this;
    }

}
