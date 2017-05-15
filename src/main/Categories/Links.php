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


require_once __DIR__ . '/Links/Link.php';
require_once __DIR__ . '/Links/Anchor.php';
require_once __DIR__ . '/Links/Hyperlink.php';

/**
 * Factory Pattern for the <b>links</b> of <b>HTML5</b>.
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.01
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Links {

    /**
     * {@see \GIgenerator\DML\HTML5\Links\Hyperlink}
     *
     * @version     GI-HTML5.01.02
     * @since       2017-01-18
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Links\Hyperlink
     * 
     */
    public static function Hyperlink($link, $content = NULL, $target = NULL) {
        return new Links\Hyperlink($link, $content, $target);
    }

}
