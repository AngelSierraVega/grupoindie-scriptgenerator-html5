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
 * The wrap attribute specifies how the text in a text area is to be wrapped when submitted in a 
 * form.
 * 
 * The wrap attribute can be used on the following element: <textarea>
 * 
 * @link <https://www.w3schools.com/tags/att_wrap.asp>
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 * 
 * @edit 19-04-16
 * - Functional trait
 * - Upgraded docblock
 */
trait wrapTrait
{

    /**
     * The wrap attribute specifies how the text in a text area is to be wrapped when submitted in a form.
     * @return string|null
     * @since 19-04-16
     */
    public function getWrap()
    {
        return $this->getAttribute("wrap");
    }

    /**
     * The wrap attribute specifies how the text in a text area is to be wrapped when submitted in a form.
     * @since 19-04-16
     */
    public function removeWrap()
    {
        $this->unsetAttribute("wrap");
        return $this;
    }

    /**
     * The wrap attribute specifies how the text in a text area is to be wrapped when submitted in a form.
     * 
     * @param boolean $hard false by default
     * soft The text in the textarea is not wrapped when submitted in a form. This is default
     * hard The text in the textarea is wrapped (contains newlines) when submitted in a form. When 
     * "hard" is used, the cols attribute must be specified
     * 
     * @return self
     * @since 19-04-16
     */
    public function setWrap($hard = false)
    {
        $this->setAttribute("wrap", $hard == true ? "hard" : "soft");
        return $this;
    }

}
