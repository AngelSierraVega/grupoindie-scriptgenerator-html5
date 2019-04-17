<?php

namespace GIndie\ScriptGenerator\HTML5\Category\Links;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute As Attribute;

/**
 * Defines a placeholder for a hyperlink.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_a.asp>
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Links
 * 
 * @version 00.A8
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 *
 * @since       2017-04-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-03
 * - Updated for new DML node
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Anchor extends Node
{

    use Attribute\HyperlinkAttributes;

    /**
     * Creates a new anchor.
     * 
     * @param       mixed|array $content Either the content or an array of the content.
     * 
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($content = [])
    {
        parent::__construct(static::TYPE_DEFAULT, "a", [], $content);
//        parent::__construct("a", false, [],
//                is_array($content) ? $content : [$content]);
    }

}
