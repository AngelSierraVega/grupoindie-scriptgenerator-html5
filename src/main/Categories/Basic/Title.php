<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Basic;

/**
 * Defines a title for the document
 * 
 * More info. at <https://www.w3schools.com/tags/tag_title.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-DML.00
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Title extends \GIgenerator\DML\Node {

    /**
     * Creates a new Title object
     * @version beta.00.02
     * @param $title The title of the document
     * @since 2016-12-28
     */
    function __construct($title) {
        parent::__construct($tag = "title", $emptyNode = false, [], [$title]);
    }

}
