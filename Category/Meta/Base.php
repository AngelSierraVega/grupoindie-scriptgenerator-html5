<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Meta;

use GIndie\ScriptGenerator\HTML5\Attribute;
use \GIndie\ScriptGenerator\HTML5\Node;

/**
 * Specify a default URL and a default target for all links on a page.
 *
 * More info. at <https://www.w3schools.com/tags/tag_base.asp>.
 * 
 * @license file://LICENSE MIT License
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Meta
 * 
 * @version 00.A8
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since  2017-05-18
 * @edit SG-HTML5.00.01 18-01-18
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Base extends Node
{

    use Attribute\hrefTrait;
    use Attribute\targetTrait;

    /**
     * Creates a new tag base object
     * 
     * @since GIG-HTML5.00.01
     * 
     * @author Izmir Sanchez Juarez <izmirreffi@gmail.com>
     * @param $href   Specifies the base URL for all relative URLs in the page
     * @param $target Specifies the default target for all hyperlinks and forms in the page
     * @edit SG-HTML5.00.01 <angel.sierra@grupoindie.com>
     */
    function __construct($href, $target)
    {
        parent::__construct(static::TYPE_EMPTY_OPEN, "base", ["href" => $href, "target" => $target]);
    }

}
