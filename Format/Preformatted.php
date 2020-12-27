<?php

namespace GIndie\ScriptGenerator\HTML5\Format;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The <pre> tag defines preformatted text, the text is displayed in a 
 * fixed-width font (usually Courier), and it preserves both spaces and line 
 * breaks.
 * 
 * @link <https://www.w3schools.com/tags/tag_pre.asp>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5
 * @license file://LICENSE
 *
 * @since 18-05-16
 * @version 00.30
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Move class to category, and deprecate
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Preformatted extends Node
{


    /**
     * Creates a new Code node.
     *
     * @since 18-05-16
     * @param mixed $content The content of the Preformatted node.
     */
    public function __construct($content)
    {
        parent::__construct(static::TYPE_DEFAULT, "pre", [], $content);
    }

}
