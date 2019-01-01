<?php

/**
 * GI-SG0-DML-DVLP - targetTrait
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 *
 * @since 17-05-18
 * @version 00.FF
 * @edit 18-11-01
 * - Revised version
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Specifies the target for where to open the linked document or where to submit the form
 * https://www.w3schools.com/tags/att_target.asp
 * @edit 18-12-31
 * - Upgraded DocBlock using https://www.computerhope.com
 */
trait targetTrait
{

    /**
     * Tag a: Designates where to open the linked file.
     * Tag area: Designates where the target URL opens.
     * Tag base: Designates the target for all of the hyperlinks in a page.
     * Tag form: Designates where the generated response is displayed upon submission.
     * 
     * @edit 18-12-31
     * @return 
     */
    public function getTarget()
    {
        return $this->getAttribute("target");
    }

    /**
     * 
     * @return $this
     */
    public function removeTarget()
    {
        $this->unsetAttribute("target");
        return $this;
    }

    /**
     * 
     * Tag a: Designates where to open the linked file.
     * Tag area: Designates where the target URL opens.
     * Tag base: Designates the target for all of the hyperlinks in a page.
     * Tag form: Designates where the generated response is displayed upon submission.
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @edit 18-12-21
     * - Handle value is null
     */
    public function setTarget($value)
    {
        if (!\is_null($value)) {
            $this->setAttribute("target", $value);
        }
        return $this;
    }

}
