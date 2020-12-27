<?php

/**
 * GI-SG1-HTML5-DVLP - Body
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Basic
 * @license file://LICENSE
 *
 * @since 16-12-28
 * @version 00.C0
 * @todo Move to \GIndie\ScriptGenerator\HTML5\Basic
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Basic;

use \GIndie\ScriptGenerator\HTML5\Node;

/**
 * The <body> tag defines the document's body. The <body> element contains all the contents of an 
 * HTML document, such as text, hyperlinks, images, tables, lists, etc.
 * @link <https://www.w3schools.com/tags/tag_body.asp>
 * 
 * @edit 18-01-03
 * - Updated for new DML node
 * @edit 18-11-01
 * - Revised version
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 * - Upgraded docblock
 */
class Body extends Node
{

    /**
     * The <body> tag defines the document's body. The <body> element contains all the contents of an 
     * HTML document, such as text, hyperlinks, images, tables, lists, etc.
     * @link <https://www.w3schools.com/tags/tag_body.asp>
     * 
     * @since 17-??-??
     * @edit 18-01-03
     */
    function __construct()
    {
        parent::__construct(static::TYPE_DEFAULT, "body");
    }

}
