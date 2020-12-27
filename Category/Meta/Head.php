<?php

/**
 * GI-SG1-HTML5 - Head
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Meta
 *
 * @since 16-12-28
 * @version 00.9A
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Meta;

use \GIndie\ScriptGenerator\DML;
use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Category\Basic\Title;

/**
 * The <head> element is a container for metadata (data about data) and is placed between the <html> tag and the <body> tag.
 * Metadata is data about the HTML document. Metadata is not displayed.
 * Metadata typically define the document title, character set, styles, scripts, and other meta information.
 * The following elements can go inside the <head> element:
 * <title> (required in every HTML document)
 * <style>
 * <base>
 * <link>
 * <meta>
 * <script>
 * <noscript>
 * 
 * More info. at  <https://www.w3schools.com/tags/tag_head.asp>
 * 
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @edit SG-HTML5.00.01 18-01-18
 */
class Head extends Node {

    /**
     * The meta tags of the Head object
     * 
     * @var     array|null
     * 
     * @since   GIG-HTML5.00.04
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    private $_metas;

    /**
     * Creates a new GIGhtml5_document_html_head object
     * 
     * @param   string $charset The encoding of the html element.
     * @param   string $title The title of the html element.
     * 
     * @since   GIG-HTML5.00.05
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @edit SG-HTML5.00.01 18-01-18
     */
    function __construct($charset, $title) {
        parent::__construct(static::TYPE_DEFAULT, "head",["charset" => $charset]);
        $this->addContent(new Title($title));
    }

    /**
     * Adds a 'link' tag as a child of the current object.
     * 
     * @param $href Specifies the location of the linked document.
     * @param $rel Specifies the relationship between the current document and
     * the linked document.
     * 
     * @since GIG-HTML5.00.05
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @todo Use Link class
     */
    public function addLink($href, $rel) {
        return $this->addContentGetPointer(DML\Factory::defaultNode("link",
                                ["rel" => $rel, "href" => $href]));
    }

    /**
     * 
     * @param array $attributes
     * @since GIG-HTML5.00.05
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function addMeta(array $attributes) {
        if (isset($this->_metas) == FALSE) {
            $this->_metas = $this->addContentGetPointer(DML\Factory::contentOnly([]));
        }
        return $this->_metas->addContentGetPointer(new Meta($attributes));
    }

}
