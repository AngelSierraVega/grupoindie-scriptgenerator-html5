<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Lists;

/**
 * Description of Unordered
 * https://www.w3schools.com/tags/tag_ul.asp
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00
 * @since       2017-04-17
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Unordered extends _List {

    /**
     *
     * @version     GI-HTML5.00
     * @since       2017-04-17
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */
    public function __construct(array $elements = array()) {
        parent::__construct(false, $elements);
    }

}
