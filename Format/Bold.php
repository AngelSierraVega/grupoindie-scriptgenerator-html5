<?php

/**
 * GI-SG1-HTML5-DVLP - Bold
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5
 * @license file://LICENSE MIT License
 *
 * @since 18-11-01
 * @version 00.30
 * @todo DEPRECATE and construct in proper categorie (https://www.computerhope.com)
 */

namespace GIndie\ScriptGenerator\HTML5\Format;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The bold tag specifies bold text.
 * 
 * According to the HTML 5 specification, the <b> tag should be used as a LAST 
 * resort when no other tag is more appropriate. The HTML 5 specification states 
 * that headings should be denoted with the <h1> to <h6> tags, emphasized text 
 * should be denoted with the <em> tag, important text should be denoted with 
 * the <strong> tag, and marked/highlighted text should use the <mark> tag.
 * 
 * The <b> tag also supports the Global Attributes in HTML.
 * The <b> tag also supports the Event Attributes in HTML.
 *
 * @link <https://www.w3schools.com/tags/tag_b.asp>
 * 
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 * 
 */
class Bold extends Node
{

    /**
     * The bold tag specifies bold text.
     * According to the HTML 5 specification, the <b> tag should be used as a LAST 
     * resort when no other tag is more appropriate. The HTML 5 specification states 
     * that headings should be denoted with the <h1> to <h6> tags, emphasized text 
     * should be denoted with the <em> tag, important text should be denoted with 
     * the <strong> tag, and marked/highlighted text should use the <mark> tag.
     *
     * @since 18-11-01
     * @param mixed $content The content of the Preformatted node.
     */
    public function __construct($content)
    {
        parent::__construct(static::TYPE_DEFAULT, "b", [], $content);
    }

}
