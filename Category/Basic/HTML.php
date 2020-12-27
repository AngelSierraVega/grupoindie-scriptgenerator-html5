<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Basic;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Category\Meta;

/**
 * Defines an HTML document.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_html.asp>
 * 
 * @todo        Documentation for custom functions
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Basic
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @version 00.A0
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-03
 * - Updated for new DML node
 * @edit SG-HTML5.00.02 18-02-02
 * - Bug correction
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 */
class HTML extends Node
{

    /**
     * The body of the HTML object
     * @var \GIgenerator\DML\HTML5\Basic\Body 
     * 
     * @since     GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    private $_body;

    /**
     * The head of the HTML object
     * 
     * @var \GIgenerator\DML\HTML5\Meta\Head 
     * 
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    private $_head;

    /**
     * Creates a new 'html' tag object
     * 
     * @since     GIG-HTML5.00.01
     * 
     * @param       string $title The title of the html element
     * @param       string $lang The languaje of the html element
     * @param       string $charset The encoding of the html element
     * 
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    function __construct($title, $lang, $charset)
    {
        parent::__construct(static::TYPE_DEFAULT, "html", ["lang" => $lang]);
        //parent::__construct("html", false, ["lang" => $lang]);
        $this->_head = parent::addContentGetPointer(new Meta\Head($charset, $title));
        $this->_body = parent::addContentGetPointer(new Body());
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\Body::addContent()}
     * 
     * @param       mixed $content The content to be added.   
     * @since       GIG-HTML5.00.01
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Body::addContent()
     */
    public function addContent($content)
    {
        return $this->_body->addContent($content);
    }

    /**
     * Adds a 'link' tag as a child of the head object.
     * @since       GIG-HTML5.00.01
     * @param       $href Specifies the location of the linked document.
     * @param       $rel Specifies the relationship between the current document
     *                   and the linked document.
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\Head::addLink()
     */
    public function addLink($href, $rel)
    {
        return $this->_head->addLink($href, $rel);
    }

    /**
     * Adds attributes to a meta tag.
     *
     * @since       GIG-HTML5.00.01
     * @param       array $attributes Define the attributes for tag meta
     *
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\Head::addMeta()
     */
    public function addMeta(array $attributes)
    {
        return $this->_head->addMeta($attributes);
    }

    /**
     * NEW Adds a 'script' tag as a child of the the body object.
     *
     * @since       GIG-HTML5.00.001
     * @param       NEW $script. The script or the file path to the script.
     * @param       NEW $srcFile. True if script is a sourced file.
     *
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\Body::addScript()
     * @edit SG-HTML5.00.02
     */
    public function addScript($script, $external = false)
    {
        return $this->_body->addScript($script, $external);
    }

    /**
     * Adds a new script on document.
     *
     * @since       GIG-HTML5.00.01
     *
     * return       \GIndie\ScriptGenerator\HTML5\Category\Basic\Body::addScriptOnDocumentReady()
     */
    public function addScriptOnDocumentReady($script)
    {
        return $this->_body->addScriptOnDocumentReady($script);
    }

    /**
     * @todo        define return.
     */
    public function getBody()
    {
        return $this->_body;
    }

}
