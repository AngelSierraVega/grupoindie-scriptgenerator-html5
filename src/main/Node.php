<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5;

require_once __DIR__ . '/Node/Classes.php';


/**
 * Represents an <b>HTML</b> node.
 * 
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-DML.01
 * @since       2016-12-21
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
abstract class Node extends \GIgenerator\DML\Node {

    /**
     * The script tags of the body object
     * @var     array|null
     * @version GI-DML.01.01
     * @since   2016-12-21
     */
    private $_scripts;

    /**
     * Adds a 'script' tag as a child of the the html5 object.
     * @version GI-DML.01.01
     * @param $script The script or the file path to the script.
     * @param $isPath [optional] True if script is a sourced file. Default false.
     * @since 2016-12-29
     */
    public function addScript($script, $isPath = false) {
        if (isset($this->_scripts) == FALSE) {
            $this->_scripts = $this->addContent(\GIgenerator\DML\Node::ContentOnly([]));
        }
        if ($srcFile) {
            $tmpScript = \GIgenerator\DML\Node::Simple("script", ["src" => $script]);
        } else {
            $tmpScript = \GIgenerator\DML\Node::Simple("script", [], [$script]);    
        }
        return $this->_scripts->addContent($tmpScript);
    }

    public function setAttribute($attributeName, $value = null) {
        if ($attributeName == "class") {
            return parent::setAttribute($attributeName, new Classes([$value]));
        } else {
            return parent::setAttribute($attributeName, $value);
        }
    }

    
    
    /**
     * 
     * @since       2017-02-08
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @version     beta.00.05
     * 
     * @param       type $id
     * 
     */
    public function setId($id) {
        return $this->setAttribute("id", $id);
    }

}


