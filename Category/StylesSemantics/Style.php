<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

use GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 *  The <style> tag is used to define style information for an HTML document.
 * More info. at <https://www.w3schools.com/tags/tag_style.asp>
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\StylesSemantics
 * 
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @since       2017-05-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 */
class Style extends Node
{

    use Attribute\GlobalAttributes;
    use Attribute\mediaTrait;
    use Attribute\scopedTrait;
    use Attribute\typeTrait;

    /**
     * Creates a new style object.
     *
     * @param       string $media Specifies what media/device the media resource is optimized for
     * @param       string $scope Specifies that the styles only apply to this element's parent element and that element's child elements
     * @param       string $type  Specifies the media type of the <style> tag
     *
     * @since       GIG-HTML5.00.01
     * @author      IZmir Sanchez Juarez <izmirreffi@gmail.com>
     * @edit SG-HTML5.00.01 18-01-18 <angel.sierra@grupoindie.com>
     */
    function __construct($content)
    {
        parent::__construct(static::TYPE_DEFAULT, "style", [], $content);
    }

}
