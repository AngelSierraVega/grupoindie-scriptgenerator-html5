<?php

/**
 * GI-SG1-HTML5-DVLP
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 *
 * @since 18-??-??
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The dirname attribute enables the submission of the text direction of the input field/textarea
 * 
 * The dirname attribute's value is always the name of the input field/textarea, followed by ".dir".
 * 
 * The dirname attribute can be used on the following elements: <input> <textarea>
 * 
 * 
 * @link <https://www.w3schools.com/tags/att_dirname.asp>
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 * @edit 19-04-16
 * - Functional trait
 * - Upgraded docblock
 */
trait dirnameTrait
{

    /**
     * The dirname attribute enables the submission of the text direction of the input field/textarea
     * 
     * @since 19-04-16
     */
    public function getDirname()
    {
        return $this->getAttribute("dirname");
    }

    /**
     * @since 19-04-16
     */
    public function removeDirname()
    {
        $this->unsetAttribute("dirname");
        return $this;
    }

    /**
     * The dirname attribute enables the submission of the text direction of the input field/textarea
     * @param string $elementName The name of the input field/textarea. '.dir' is added automatically.
     * @return self
     * @since 19-04-16
     */
    public function setDirname($elementName)
    {
        $this->setAttribute("dirname", $elementName . ".dir");
        return $this;
    }

}
