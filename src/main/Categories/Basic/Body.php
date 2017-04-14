<?php

/* 
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Basic;

/**
 * Defines the document's body
 * 
 * More info. at <https://www.w3schools.com/tags/tag_body.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.01
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Body extends \GIgenerator\DML\HTML5\Node {

    use \GIgenerator\DML\HTML5\Handlers\GlobalAttributes;

    /**
     * Creates a new Body object
     * 
     * @version     GI-HTML5.01.01
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    function __construct() {
        parent::__construct($tag = "body");
    }

}
