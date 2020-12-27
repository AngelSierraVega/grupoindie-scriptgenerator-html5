<?php

namespace GIndie\ScriptGenerator\HTML5;

/**
 * Represents an <b>HTML5</b> document.
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @package GIndie\ScriptGenerator\HTML5
 * @license file://LICENSE
 * 
 * @version 01.00
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * 
 * @since 16-12-28
 * @edit GIG-HTML5.00.01
 * @edit SG-HTML5.00.01 18-01-18
 * @edit SG-HTML5.00.02 18-02-14
 * - Updated addContent()
 * - Updated varnames due to PSR-1 violation
 */
class Document extends Node
{

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\Basic\Doctype 
     * @edit SG-HTML5.00.02
     */
    private $doctype;

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\Basic\HTML 
     * @edit SG-HTML5.00.02
     */
    private $html;

    /**
     * Creates a new Document object.
     * 
     * @param       string $title The title of the html document.
     * @param       string $lang [optional] The languaje of the html document.
     * @param       string $doctype [optional] The document type.
     * @param       string $charset [optional] The encoding of the html document.
     * 
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @edit SG-HTML5.00.01
     */
    public function __construct($title, $lang = "en", $doctype = "html", $charset = "UTF-8")
    {
        parent::__construct(static::TYPE_CONTENT_ONLY);
        $this->doctype = parent::addContentGetPointer(new Category\Basic\Doctype($doctype));
        $this->html = parent::addContentGetPointer(new Category\Basic\HTML($title, $lang, $charset));
    }

    /**
     * Adds content to the document.
     * 
     * @param       mixed $content The content to add.
     * 
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return $this
     * @edit SG-HTML5.00.02
     */
    public function addContent($content)
    {
        $this->html->addContent($content);
        return $this;
    }

    /**
     * Adds a 'link' tag as a child of the head object.
     * 
     * @param       string $href Specifies the location of the linked document.
     * @param       string $rel Specifies the relationship between the current document and the linked document.
     * 
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      mixed An instance of the added content.
     */
    public function addLink($href, $rel)
    {
        return $this->html->addLink($href, $rel);
    }

    /**
     * Adds a 'meta' tag as a child of the object.
     * 
     * @param       array $attributes
     * 
     * @since       2016-12-29
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      mixed An instance of the added content.
     */
    public function addMeta(array $attributes)
    {
        return $this->html->addMeta($attributes);
    }

    /**
     * Adds a 'script' tag as a child of the object.
     * 
     * @param       string $script The script or the file path to the script.
     * @param       boolean $external [false] True if script is in a external file.
     * 
     * @since       2016-12-28
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      mixed An instance of the added content.
     */
    public function addScript($script, $external = false)
    {
        return $this->html->addScript($script, $external);
    }

    //

    /**
     * 
     * @since       2017-05-01
     */
    public function addScriptOnDocumentReady($script)
    {
        return $this->html->addScriptOnDocumentReady($script);
    }

    /**
     * 
     * @since       2017-05-01
     */
    public function getBody()
    {
        return $this->html->getBody();
    }

}
