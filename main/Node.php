<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5;

require_once __DIR__ . '/Node/Tag.php';

/**
 * Encapsulates the protected attributes of the HTML node object.
 * @version beta.00.03
 * @category    CodeGenerator
 * @package     DescripriveMarkupLanguaje
 * @subpackage  HTML
 * @since   2016-12-22
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait _protectedAttrs {

    /**
     * Creates a new HTML5 node object.
     * 
     * @param   $tag [optional]
     * @param   $emptyNode [optional]
     * @param   $attributes [optional]
     * @param   $content [optional]

     * @return  Node
     * @throws  NA
     * 
     * @since   2016-12-19
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */
    protected function __construct($tag = null, $emptyNode = false, $attributes = [], $content = []) {
        try {
            $this->_emptyNode = $emptyNode;
            $this->_tagOpen = $emptyNode ? new Tag\EmptyTag($tag, $attributes) : new \GIndie\DML\Node\Tag\OpenTag($tag, $attributes);
            $this->_tagClose = $emptyNode ? "" : new \GIndie\DML\Node\Tag\CloseTag($tag);
            $this->_content = $emptyNode ? "" : new \GIndie\DML\Node\Content\Content($content);
        } catch (Exception $e) {
            displayError($e);
        }
    }
    
    /**
     * The script tags of the body object
     * @var     array|null
     * @version beta.00.03
     * @since   2016-12-29
     */
    private $_scripts;

    /**
     * Adds a 'script' tag as a child of the the html5 object.
     * @version beta.00.03
     * @param $script The script or the file path to the script.
     * @param $srcFile [optional] True if script is a sourced file. Default false.
     * @since 2016-12-29
     */
    public function addScript($script, $srcFile = false) {
        try {
            if (isset($this->_scripts) == FALSE) {
                $this->_scripts = $this->addContent(\GIndie\DML\Node\Factory::ContentOnly([]));
            }
            if ($srcFile) {
                $tmpScript = \GIndie\DML\Node\Factory::Simple("script", ["src" => $script]);
            } else {
                $tmpScript = \GIndie\DML\Node\Factory::Simple("script",[],[$script]);
            }
            return $this->_scripts->addContent($tmpScript);
        } catch (Exception $e) {
            displayError($e);
        }
    }
    
}

/**
 * Represents an HTML node.
 * 
 * @category    CodeGenerator
 * @package     DescripriveMarkupLanguaje
 * @subpackage  Node
 * @copyright   Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     beta.00.04
 * @since       2016-12-21
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Node extends \GIndie\DML\Node\Factory {

    use _protectedAttrs;
}
