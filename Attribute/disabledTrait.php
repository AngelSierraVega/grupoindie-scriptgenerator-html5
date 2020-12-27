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
 * @since 18-??-??
 * @version 00.90
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The disabled attribute is a boolean attribute.
 * When present, it specifies that the element should be disabled.
 * A disabled element is unusable.
 * The disabled attribute can be set to keep a user from using the element until some other 
 * condition has been met (like selecting a checkbox, etc.). Then, a JavaScript could remove the 
 * disabled value, and make the element usable.
 * The disabled attribute can be used on the following elements: <button> <fieldset> <input> <optgroup>
 * <option> <select> <textarea>
 * @link <https://www.w3schools.com/tags/att_disabled.asp>
 * 
 * 
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 * @edit 19-04-16
 * - Functional trait
 * - Upgraded docblock
 */
trait disabledTrait
{

    /**
     * When present, it specifies that the element should be disabled. A disabled element is unusable.
     * 
     * @since 19-04-16
     */
    public function getDisabled()
    {
        return $this->getAttribute("disabled");
    }

    /**
     * @since 19-04-16
     */
    public function removeDisabled()
    {
        $this->unsetAttribute("disabled");
        return $this;
    }

    /**
     * When present, it specifies that the element should be disabled. A disabled element is unusable.
     * @return self
     * @since 19-04-16
     */
    public function setDisabled()
    {
        $this->setAttribute("disabled");
        return $this;
    }

}
