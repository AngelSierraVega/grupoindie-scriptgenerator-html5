<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Programming;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute as Attribute;

/**
 * The <noscript> tag defines an alternate content for users that have disabled scripts in their browser
 * or have a browser that doesn't support script.
 *
 * More info. at <https://www.w3schools.com/tags/tag_noscript.asp>
 * 
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Programming
 * 
 * @version 00.A8
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @since       2017-04-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Noscript extends Node
{


    /**
     * Creates a new Noscript object.
     *
     * @param       mixed $content  The content of the Noscript.
     *
     * @since       GIG-HTML5.00.01
     * @author      Izmir Sanchez Juarez <izmirreffi@gmail.com>
     * @edit SG-HTML5.00.01 18-01-18 <angel.sierra@grupoindie.com>
     */
    function __construct($content)
    {
        parent::__construct(static::TYPE_DEFAULT, "noscript", [], $content);
    }

}
