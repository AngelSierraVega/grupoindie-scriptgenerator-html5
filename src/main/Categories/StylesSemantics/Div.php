<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\StylesSemantics;

/**
 * Defines a section in a document
 * 
 * https://www.w3schools.com/tags/tag_div.asp
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00
 * @since       2017-04-16
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Div extends \GIgenerator\DML\HTML5\Node {

    use \GIgenerator\DML\HTML5\Handlers\GlobalAttributes;

    public function __construct($content, array $attributes = array()) {
        parent::__construct("div", false, $attributes, is_array($content) ? $content : [$content]);
    }

}
