<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\Lists;

use \GIgenerator\DML\HTML5\Lists\_List;

/**
 * Description of Ordered
 * https://www.w3schools.com/tags/tag_ol.asp
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
class Ordered extends _List {

    /**
     *
     * @version     GI-HTML5.00
     * @since       2017-04-17
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */
    public function __construct(array $elements = array()) {
        parent::__construct(true, $elements);
    }

}
