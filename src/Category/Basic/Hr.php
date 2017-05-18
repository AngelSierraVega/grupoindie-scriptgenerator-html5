<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\Basic;

/**
 * Defines a thematic change in the content.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_hr.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.01
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Hr extends \GIndie\Generator\DML\HTML5\Node {

    use \GIndie\Generator\DML\HTML5\Attribute\GlobalAttributes;

    /**
     *
     * @version     GI-HTML5.01.01
     * @since       2017-04-14
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct() {
        parent::__construct("hr", "closed");
    }

}
