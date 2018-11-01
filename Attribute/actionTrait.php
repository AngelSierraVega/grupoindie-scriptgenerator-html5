<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
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
 * Specifies where to send the form-data when a form is submitted.
 * https://www.w3schools.com/tags/att_action.asp
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait actionTrait
{

    /**
     * 
     */
    public function getAction()
    {
        return $this->getAttribute("action");
    }

    /**
     * 
     */
    public function removeAction()
    {
        $this->unsetAttribute("action");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * 
     */
    public function setAction($value)
    {
        $this->setAttribute("action", $value);
        return $this;
    }

}
