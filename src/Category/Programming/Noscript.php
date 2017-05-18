<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Programming;

/**
 * The <noscript> tag defines an alternate content for users that have disabled scripts in their browser
 * or have a browser that doesn't support script.
 *
 * More info. at <https://www.w3schools.com/tags/tag_noscript.asp>
 *
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 *
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00
 * @since       2017-04-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Noscript extends \GIndie\Generator\DML\HTML5\Node {

    use \GIndie\Generator\DML\HTML5\Attribute\GlobalAttributes;

    /**
     * Creates a new Noscript object.
     *
     * @param       mixed $content  The content of the Noscript.
     *
     * @version     GI-HTML5.00.01
     * @since       2017-04-17
     * @author      Izmir Sanchez Juarez <izmirreffi@gmail.com>
     */
    function __construct($content) {
        parent::__construct("p", false, [], [$content]);
    }

}
