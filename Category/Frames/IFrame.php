<?php

namespace GIndie\ScriptGenerator\HTML5\Category\Frames;

use GIndie\ScriptGenerator\HTML5\Node;
use GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The <iframe> tag specifies an inline frame.
 * An inline frame is used to embed another document within the current HTML document.
 * 
 * @link <https://www.w3schools.com/tags/tag_iframe.asp>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Frames
 * 
 * @version 00.A8
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 *
 * @since 18-02-04 Empty class created.
 * @edit SG-HTML5.00.01
 * - Extend from Node
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class IFrame extends Node
{

    /**
     * Uses for class
     * @since SG-HTML5.00.01
     */
    use Attribute\nameTrait;
    use Attribute\srcTrait;
    use Attribute\sandboxTrait; //Enables an extra set of restrictions for the content in an <iframe>
    use Attribute\srcdocTrait; //Specifies the HTML content of the page to show in the <iframe>
    use Attribute\widthTrait; //Specifies the width of an <iframe>

    /**
     * @since SG-HTML5.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\Frames\IFrame
     */
    public static function instance()
    {
        return new \GIndie\ScriptGenerator\HTML5\Category\Frames\IFrame();
    }

    /**
     * @since SG-HTML5.00.01
     */
    function __construct()
    {
        parent::__construct(static::TYPE_DEFAULT, "iframe");
    }

}
