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

require_once 'Node/Tag.php';

/**
 * Encapsulates the protected attributes of the HTML node object.
 * 
 * @category    CodeGenerator
 * @package     DescripriveMarkupLanguaje
 * @subpackage  HTML
 *
 * @version beta.00.01
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
            $this->_tagOpen = $emptyNode ? new Tag\EmptyTag($tag, $attributes) : new Tag\OpenTag($tag);
            $this->_tagClose = $emptyNode ? "" : new Tag\CloseTag($tag);
            $this->_content = $emptyNode ? "" : new Content\Content($content);
        } catch (Exception $e) {
            displayError($e);
        }
    }
    
    /**
     * @version NEW beta.00.02 Class GIGhtml5 +addScript
     * NEW Adds a 'script' tag as a child of the the html5 object.
     * @param NEW $script. The script or the file path to the script.
     * @param NEW $srcFile [optional]. True if script is a sourced file. 
     * Default false.
     */
    public function addScript($script, $srcFile = false) {
        try {
            $tmpScript = new self("script");
            if ($srcFile) {
                $tmpScript->setAttribute("src", $script);
            } else {
                $tmpScript->addElement($script);
            }
            return $this->addElement($tmpScript);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }
}