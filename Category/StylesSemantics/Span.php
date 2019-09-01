<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Defines a section in a document
 *
 * More info: <https://www.w3schools.com/tags/tag_div.asp>
 * 
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\StylesSemantics
 * 
 * @version 00.A8
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @since       2017-04-16
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Span extends Node {


    /**
     * Creates a new section object.
     *
     * @param       mixed $content  The content of the section.
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @edit SG-HTML5.00.01 18-01-18
     */
    public function __construct($content = null, array $attributes = []) {
        parent::__construct(static::TYPE_DEFAULT, "span", $attributes, $content);
    }

}
