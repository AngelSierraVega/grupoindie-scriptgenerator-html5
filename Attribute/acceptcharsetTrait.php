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
 * Sspecifies the character encodings that are to be used for the form submission.
 * https://www.w3schools.com/tags/att_accept-charset.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait acceptcharsetTrait
{

    /**
     * 
     */
    public function getAcceptcharset()
    {
        return $this->getAttribute("accept-charset");
    }

    /**
     * 
     */
    public function removeAcceptcharset()
    {
        $this->unsetAttribute("accept-charset");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     */
    public function setAcceptcharset($value)
    {
        $this->setAttribute("accept-charset", $value);
        return $this;
    }

}
