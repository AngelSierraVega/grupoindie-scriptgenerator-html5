<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Programming;

use \GIndie\ScriptGenerator\HTML5\Node;

/**
 * Defines a client-side script
 * 
 * More info. at <https://www.w3schools.com/tags/tag_script.asp>
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Programming
 * 
 * @version 00.A0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 */
class Script extends Node {

    //supports the Global Attributes in HTML.
    //async 	async 	Specifies that the script is executed asynchronously (only for external scripts)
    //charset 	charset 	Specifies the character encoding used in an external script file
    //defer 	defer 	Specifies that the script is executed when the page has finished parsing (only for external scripts)
    //src 	URL 	Specifies the URL of an external script file
    //type 	media_type 	Specifies the media type of the script

    /**
     * Script   constructor.
     *
     * @since   GIG-HTML5.00.01
     * @param   null|string $script
     * @param   bool $external
     * @edit SG-HTML5.00.01 18-01-18
     */
    public function __construct($script, $external = false) {
        if ($external) {
            parent::__construct(static::TYPE_DEFAULT, "script", ["src" => $script]);
        } else {
            parent::__construct(static::TYPE_DEFAULT, "script", [], [$script]);
        }
    }

}
