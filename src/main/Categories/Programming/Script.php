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
 * Defines a client-side script
 * 
 * More info. at <https://www.w3schools.com/tags/tag_script.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-DML.00
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Script extends \GIgenerator\DML\HTML5\Node {

    //supports the Global Attributes in HTML.
    //async 	async 	Specifies that the script is executed asynchronously (only for external scripts)
    //charset 	charset 	Specifies the character encoding used in an external script file
    //defer 	defer 	Specifies that the script is executed when the page has finished parsing (only for external scripts)
    //src 	URL 	Specifies the URL of an external script file
    //type 	media_type 	Specifies the media type of the script

    public function __construct($script, $external = false) {
        if ($external) {
            parent::__construct("script", false, ["src" => $script]);
        } else {
            parent::__construct("script", false, [], [$script]);
        }
    }

}
