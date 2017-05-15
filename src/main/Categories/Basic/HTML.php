<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Basic;

/**
 * Defines an HTML document.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_html.asp>
 * 
 * @todo        Documentation for custom functions
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00.02
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class HTML extends \GIgenerator\DML\Node {

    /**
     * The body of the HTML object
     * @var \GIgenerator\DML\HTML5\Basic\Body 
     * 
     * @version     GIG-HTML5.00.01
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    private $_body;

    /**
     * The head of the HTML object
     * 
     * @var \GIgenerator\DML\HTML5\Meta\Head 
     * 
     * @version     GIG-HTML5.00.01
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    private $_head;

    /**
     * Creates a new 'html' tag object
     * 
     * @version     GIG-HTML5.00.01
     * 
     * @param       string $title The title of the html element
     * @param       string $lang The languaje of the html element
     * @param       string $charset The encoding of the html element
     * 
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since       2016-12-28
     */
    function __construct($title, $lang, $charset) {
        parent::__construct("html", false, ["lang" => $lang]);
        $this->_head = parent::addContent(new \GIgenerator\DML\HTML5\Meta\Head($charset, $title));
        $this->_body = parent::addContent(new \GIgenerator\DML\HTML5\Basic\Body());
    }

    /**
     * @version     GIG-HTML5.00
     * @since       2016-12-28
     */
    public function addContent($content) {
        return $this->_body->addContent($content);
    }

    /**
     * Adds a 'link' tag as a child of the head object.
     * @version     GIG-HTML5.00
     * @param       $href Specifies the location of the linked document.
     * @param       $rel Specifies the relationship between the current document
     *                   and the linked document.
     * @since       2016-12-28
     */
    public function addLink($href, $rel) {
        return $this->_head->addLink($href, $rel);
    }

    /**
     * 
     * @version     GIG-HTML5.00
     * @param array $attributes
     * @since 2016-12-28
     */
    public function addMeta(array $attributes) {
        return $this->_head->addMeta($attributes);
    }

    /**
     * @version     GIG-HTML5.00
     * NEW Adds a 'script' tag as a child of the the body object.
     * @param NEW $script. The script or the file path to the script.
     * @param NEW $srcFile. True if script is a sourced file. 
     */
    public function addScript($script, $srcFile) {
        return $this->_body->addScript($script, $srcFile);
    }
    
    /**
     * 
     * @since       2017-05-01
     * @version     GIG-HTML5.00.01
     */
    public function addScriptOnDocumentReady($script) {
        return $this->_body->addScriptOnDocumentReady($script);
    }

    /**
     * 
     * @since       2017-05-01
     * @version     GIG-HTML5.00.01
     */
    public function getBody() {
        return $this->_body;
    }

}
