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
 * The maxlength attribute specifies the maximum number of characters allowed in the element.
 * 
 * The maxlength attribute can be used on the following elements: <input> <textarea>
 * 
 * @link <https://www.w3schools.com/tags/att_maxlength.asp>
 * 
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 * @edit 19-04-16
 * - Functional trait
 * - Docblock upgraded
 */
trait maxlengthTrait
{

    /**
     * Specifies the maximum number of characters allowed in the element.
     * 
     * @since 19-04-16
     */
    public function getMaxlength()
    {
        return $this->getAttribute("maxlength");
    }

    /**
     * Specifies the maximum number of characters allowed in the element.
     * @since 19-04-16
     */
    public function removeMaxlength()
    {
        $this->unsetAttribute("maxlength");
        return $this;
    }

    /**
     * Specifies the maximum number of characters allowed in the element.
     * @since 19-04-16
     */
    public function setMaxlength($number)
    {
        $this->setAttribute("maxlength", $number);
        return $this;
    }

}
