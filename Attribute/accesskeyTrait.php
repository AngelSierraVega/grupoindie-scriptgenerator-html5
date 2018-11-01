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
 * Specifies a shortcut key to activate/focus an element.
 * https://www.w3schools.com/tags/att_accesskey.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait accesskeyTrait
{

    /**
     * 
     */
    public function getAccesskey()
    {
        return $this->getAttribute("accesskey");
    }

    /**
     * 
     */
    public function removeAccesskey()
    {
        $this->unsetAttribute("accesskey");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     */
    public function setAccesskey($value)
    {
        $this->setAttribute("accesskey", $value);
        return $this;
    }

}
