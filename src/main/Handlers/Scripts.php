<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Handlers;

/**
 * An abstraction layer for the script related functions of an HTML5 node.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-DML.01
 * @since       2017-03-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait scriptHandler {

    /**
     * @internal     
     * @var         \GIgenerator\DML\Node  $_scripts Stores an instance of the node containing the scripts. 
     * 
     * @version     GI-DML.01.01
     * 
     * @since       2017-03-14
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */
    private $_scripts;

    /**
     * Adds a 'script' node as a child of the the html5 object.
     * 
     * @version     GI-DML.01.01
     * 
     * @param       string $script The script or the file path to the script.
     * @param       boolean $external [optional] TRUE if script is an external file. Default FALSE.
     * 
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since       2017-03-14
     * 
     * @return      \GIgenerator\DML\HTML5\Programming\Script
     * @throws      NA
     * 
     */
    public function addScript($script, $external = FALSE) {
        if (isset($this->_scripts) == FALSE) {
            $this->_scripts = $this->addContent(\GIgenerator\DML\Node::ContentOnly([]));
        }
        return $this->_scripts->addContent(\GIgenerator\DML\HTML5\Programming::Script($script, $external));
    }

}
