<?php

/**
 * GI-SG1-HTML5-DVLP
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 *
 * @since 17-04-15
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The placeholder attribute specifies a short hint that describes the expected value of a input 
 * field / textarea. The short hint is displayed in the field before the user enters a value.
 * The placeholder attribute can be used on the following elements: <input> <textarea>
 * 
 * @link <https://www.w3schools.com/tags/att_placeholder.asp>
 * 
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 * @edit 19-04-16
 * - Functional trait
 * - Upgraded docblock
 */
trait placeholderTrait
{

    /**
     * Specifies a short hint that describes the expected value of a input field / textarea.
     * @return string|null
     * @since 19-04-16
     */
    public function getPlaceholder()
    {
        return $this->getAttribute("placeholder");
    }

    /**
     * Specifies a short hint that describes the expected value of a input field / textarea.
     * @since 19-04-16
     */
    public function removePlaceholder()
    {
        $this->unsetAttribute("placeholder");
        return $this;
    }

    /**
     * Specifies a short hint that describes the expected value of a input field / textarea.
     * @param string $shortHint The short hint is displayed in the field before the user enters a value.
     * @return self
     * @since 19-04-16
     */
    public function setPlaceholder($shortHint)
    {
        $this->setAttribute("placeholder", $shortHint);
        return $this;
    }

}
