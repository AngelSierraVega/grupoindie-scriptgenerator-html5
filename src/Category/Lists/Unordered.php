<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Lists;

/**
 * Tag defines an unordered
 * More info. at  <https://www.w3schools.com/tags/tag_ul.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00.01
 * @since       2017-05-18
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Unordered extends _List {

    /**
     *
     * @param       array $elements
     * @since       GI-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */
    public function __construct(array $elements = array()) {
        parent::__construct(false, $elements);
    }

}
