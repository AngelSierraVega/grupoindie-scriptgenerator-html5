<?php

/**
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
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
 * Specifies the visible width of a text area.
 * https://www.w3schools.com/tags/att_cols.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait colsTrait
{

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getCols()
    {
        return $this->getAttribute("cols");
    }

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function removeCols()
    {
        $this->unsetAttribute("cols");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setCols($value)
    {
        $this->setAttribute("cols", $value);
        return $this;
    }

}
