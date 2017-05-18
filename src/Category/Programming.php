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

require_once __DIR__ . '/Programming/Script.php';

/**
 * Factory Pattern for the <b>programming tags</b> of <b>HTML</b>.
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
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Programming {

    /**
     * {@see \GIgenerator\DML\HTML5\Programming\Script}
     *
     * @version     GI-HTML5.01.01
     * @since       2017-04-12
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return \GIgenerator\DML\HTML5\Programming\Script
     * 
     */
    public static function Script($script, $external = false) {
        return new Programming\Script($script, $external);
    }

    //<noscript> 	Defines an alternate content for users that do not support client-side scripts
    //<embed> 	Defines a container for an external (non-HTML) application
    //<object> 	Defines an embedded object
    //<param> 	Defines a parameter for an object
}
