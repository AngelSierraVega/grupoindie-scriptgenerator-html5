<?php

namespace GIndie\ScriptGenerator\HTML5\Category\Images;

use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The <img> tag defines an image in an HTML page.
 * 
 * @link <https://www.w3schools.com/tags/tag_img.asp>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Images
 * 
 * @version 00.AF
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 *
 * @since 18-02-23 
 * - Empty class created.
 * @edit SG-HTML5.00.01
 * - Created __construct()
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Img extends \GIndie\ScriptGenerator\HTML5\Node
{

    /**
     * The <img> tag defines an image in an HTML page.
     * 
     * @param type $src
     * @param type $alt
     * 
     * @since SG-HTML5.00.01
     */
    public function __construct($src, $alt)
    {
        parent::__construct(static::TYPE_DEFAULT, "img", ["src" => $src, "alt" => $alt], null);
    }

}
