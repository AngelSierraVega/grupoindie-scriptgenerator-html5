<?php

/**
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
 * Specifies the HTTP method to use when sending form-data.
 * https://www.w3schools.com/tags/att_method.asp
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait methodTrait
{

    /**
     * [description]
     * 
     * @since   GIG-HTML5.00.01
     */
    public function getMethod()
    {
        return $this->getAttribute("method");
    }

    /**
     * @return $this
     * 
     * @since   GIG-HTML5.00.01
     */
    public function removeMethod()
    {
        $this->unsetAttribute("method");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since   GIG-HTML5.00.01
     */
    public function setMethod($value)
    {
        $this->setAttribute("method", $value);
        return $this;
    }

}
