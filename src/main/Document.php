<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5;

/**
 * Represents an <b>HTML5</b> document.
 * 
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.00.01
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Document extends Node {

    private $_doctype;
    private $_html;

    /**
     * Creates a new Document object.
     * 
     * @param       string $title The title of the html document.
     * @param       string $lang [optional] The languaje of the html document.
     * @param       string $doctype [optional] The document type.
     * @param       string $charset [optional] The encoding of the html document.
     * 
     * @version     GIG-HTML5.00.00
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($title, $lang = "en", $doctype = "html", $charset = "UTF-8") {
        parent::__construct($tag = null, $emptyNode = false);
        $this->_doctype = parent::addContentGetPointer(new Category\Basic\Doctype($doctype));
        $this->_html = parent::addContentGetPointer(new Category\Basic\HTML($title, $lang, $charset));
    }

    /**
     * Adds content to the document.
     * 
     * @param       mixed $content The content to add.
     * 
     * @version     GIG-HqwTML5.00.00
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      mixed An instance of the added content.
     */
    public function addContent($content) {
        return $this->_html->addContent($content);
    }

    /**
     * Adds a 'link' tag as a child of the head object.
     * 
     * @param       string $href Specifies the location of the linked document.
     * @param       string $rel Specifies the relationship between the current document and the linked document.
     * 
     * @version     GIG-HTML5.00.00
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      mixed An instance of the added content.
     */
    public function addLink($href, $rel) {
        return $this->_html->addLink($href, $rel);
    }

    /**
     * Adds a 'meta' tag as a child of the object.
     * 
     * @param       array $attributes
     * 
     * @version     GIG-HTML5.00.00
     * @since       2016-12-29
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      mixed An instance of the added content.
     */
    public function addMeta(array $attributes) {
        return $this->_html->addMeta($attributes);
    }

    /**
     * Adds a 'script' tag as a child of the object.
     * 
     * @param       string $script The script or the file path to the script.
     * @param       boolean $external [false] True if script is in a external file.
     * 
     * @version     GIG-HTML5.00.00
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      mixed An instance of the added content.
     */
    public function addScript($script, $external = false) {
        return $this->_html->addScript($script, $external);
    }
    
    //
    
    /**
     * 
     * @since       2017-05-01
     * @version     GIG-HTML5.00.01
     */
    public function addScriptOnDocumentReady($script) {
        return $this->_html->addScriptOnDocumentReady($script);
    }

    /**
     * 
     * @since       2017-05-01
     * @version     GIG-HTML5.00.01
     */
    public function getBody() {
        return $this->_html->getBody();
    }

}
