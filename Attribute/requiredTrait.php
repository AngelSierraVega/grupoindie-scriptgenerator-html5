<?php

/**
 * GI-SG1-HTML5-DVLP
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 *
 * @since 17-04-15
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * When present, it specifies that the element must be filled out before submitting the form. 
 * The required attribute is a boolean attribute.
 * The required attribute can be used on the following elements: <input> <select> <textarea>
 * @link <https://www.w3schools.com/tags/att_required.asp>
 * 
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 * @edit 19-04-16
 * - Functional trait
 * - Upgraded docblock
 */
trait requiredTrait
{

    /**
     * When present, it specifies that the element must be filled out before submitting the form. 
     * The required attribute is a boolean attribute.
     * @since 19-04-16
     */
    public function getRequired()
    {
        return $this->getAttribute("required");
    }

    /**
     * When present, it specifies that the element must be filled out before submitting the form. 
     * The required attribute is a boolean attribute.
     * @since 19-04-16
     */
    public function removeRequired()
    {
        $this->unsetAttribute("required");
        return $this;
    }

    /**
     * When present, it specifies that the element must be filled out before submitting the form. 
     * The required attribute is a boolean attribute.
     * 
     * @return self
     * @since 19-04-16
     */
    public function setRequired()
    {
        $this->setAttribute("required");
        return $this;
    }

}
