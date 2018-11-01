<?php

/**
 * 
 * 
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-05-18
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Specifies the target for where to open the linked document or where to submit the form
 * https://www.w3schools.com/tags/att_target.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait targetTrait
{

    /**
     * [description]
     * 
     * @since   GIG-HTML5.00.01
     */
    public function getTarget()
    {
        return $this->getAttribute("target");
    }

    /**
     * @return $this
     * 
     * @since   GIG-HTML5.00.01
     */
    public function removeTarget()
    {
        $this->unsetAttribute("target");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since   GIG-HTML5.00.01
     */
    public function setTarget($value)
    {
        $this->setAttribute("target", $value);
        return $this;
    }

}
