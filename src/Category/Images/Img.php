<?php

namespace GIndie\ScriptGenerator\HTML5\Category\Images;

/**
 * The <img> tag defines an image in an HTML page.
 * 
 * @link <https://www.w3schools.com/tags/tag_img.asp>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage HTML5
 *
 * @version SG-HTML5.00.00 18-02-23 
 * - Empty class created.
 * @edit SG-HTML5.00.01
 * - Created __construct()
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
    protected function __construct($src, $alt)
    {
        parent::__construct(static::TYPE_DEFAULT, "img", ["src" => $src, "alt" => $alt], null);
    }

}
