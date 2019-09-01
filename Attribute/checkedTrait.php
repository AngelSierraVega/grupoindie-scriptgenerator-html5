<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
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
 * Specifies that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio").
 * https://www.w3schools.com/tags/att_checked.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait checkedTrait
{

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getChecked()
    {
        return $this->getAttribute("checked");
    }

    /**
     * [description]
     * @return self
     * 
     * @since   GIG-HTML5.00.01
     * 
     */
    public function removeChecked()
    {
        $this->unsetAttribute("checked");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setChecked($value)
    {
        $this->setAttribute("checked", $value);
        return $this;
    }

}
