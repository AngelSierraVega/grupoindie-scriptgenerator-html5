<?php

/**
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
 * Specifies whether the content of an element is editable or not
 * @contenteditable
 * https://www.w3schools.com/tags/att_contenteditable.asp
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait contenteditableTrait
{

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getContenteditable()
    {
        return $this->getAttribute("contenteditable");
    }

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * @return self
     * 
     */
    public function removeContenteditable()
    {
        $this->unsetAttribute("contenteditable");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setContenteditable($value)
    {
        $this->setAttribute("contenteditable", $value);
        return $this;
    }

}
