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
 * The rows attribute specifies the visible height of a text area, in lines. Note: The size of a 
 * textarea can also be specified by the CSS height and width properties.
 * 
 * The rows attribute can be used on the following element: <textarea>
 * 
 * @link <https://www.w3schools.com/tags/att_rows.asp>
 * 
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 */
trait rowsTrait
{

    /**
     * Specifies the visible height of a text area, in lines. Note: The size of a  textarea can 
     * also be specified by the CSS height and width properties.
     * @return int|null
     * @since 19-04-15
     */
    public function getRows()
    {
        return $this->getAttribute("rows");
    }

    /**
     * Specifies the visible height of a text area, in lines. Note: The size of a  textarea can 
     * also be specified by the CSS height and width properties.
     * @since 19-04-15
     */
    public function removeRows()
    {
        $this->unsetAttribute("rows");
        return $this;
    }

    /**
     * Specifies the visible height of a text area, in lines. Note: The size of a  textarea can 
     * also be specified by the CSS height and width properties.
     * @since 19-04-15
     */
    public function setRows($number)
    {
        $this->setAttribute("rows", $number);
        return $this;
    }

}
