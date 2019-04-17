<?php

/**
 * GI-SG1-HTML5-DVLP
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 *
 * @since 17-04-15
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The readonly attribute is a boolean attribute.
 * When present, it specifies that an input field or textarea is read-only.
 * A read-only field cannot be modified (however, a user can tab to it, highlight it, and copy the 
 * text from it).
 * The readonly attribute can be set to keep a user from changing the value until some other 
 * conditions have been met (like selecting a checkbox, etc.). Then, a JavaScript can remove the 
 * readonly value, and make the input field editable.
 * The readonly attribute can be used on the following elements: <input> <textarea>
 * @link <https://www.w3schools.com/tags/att_readonly.asp> 
 * 
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 * @edit 19-04-16
 * - Functional trait
 * - Upgraded docblock
 */
trait readonlyTrait
{

    /**
     * Specifies that an input field or textarea is read-only.
     * @since 19-04-16
     */
    public function getReadonly()
    {
        return $this->getAttribute("readonly");
    }

    /**
     * Specifies that an input field or textarea is read-only.
     * @since 19-04-16
     */
    public function removeReadonly()
    {
        $this->unsetAttribute("readonly");
        return $this;
    }

    /**
     * Specifies that an input field or textarea is read-only.
     * @return self
     * @since 19-04-16
     */
    public function setReadonly()
    {
        $this->setAttribute("readonly");
        return $this;
    }

}
