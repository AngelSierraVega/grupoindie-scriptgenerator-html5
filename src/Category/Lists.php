<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5;

require_once __DIR__ . '/Lists/ListItem.php';
require_once __DIR__ . '/Lists/_List.php';
require_once __DIR__ . '/Lists/Ordered.php';
require_once __DIR__ . '/Lists/Unordered.php';

/**
 * Factory Pattern for the <b>Lists</b> of <b>HTML5</b>.
 * 
 * Partial: Not <menu> or <menuitem>
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00
 * @since       2017-01-04
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Lists {

    /**
     * {@see \GIgenerator\DML\HTML5\Lists\Ordered}
     * 
     * @param       array $elements
     *
     * @version     GI-HTML5.00.02
     * @since       2017-01-04
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Lists\Ordered
     * 
     */
    public static function Ordered(array $elements) {
        return new Lists\Ordered($elements);
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Lists\Unordered}
     * 
     * @param       array $elements
     *
     * @version     GI-HTML5.00.02
     * @since       2017-01-04
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Lists\Unordered
     * 
     */
    public static function Unordered(array $elements) {
        return new Lists\Unordered($elements);
    }
}
