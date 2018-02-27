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

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute as Attribute;

/**
 * Defines a section in a document
 *
 * More info: <https://www.w3schools.com/tags/tag_div.asp>
 *
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.00.03
 * @since       2017-04-16
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 */
class Span extends Node {

    use Attribute\GlobalAttributes;

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
