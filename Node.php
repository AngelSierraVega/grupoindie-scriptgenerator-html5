<?php

/**
 * HTML5 - Node 2016-12-21
 *
 * @copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @package Generator
 * @subpackage HTML5
 *
 * @version GIG-HTML5.02.00
 */

namespace GIndie\ScriptGenerator\HTML5;

use GIndie\ScriptGenerator\DML;

/**
 * Represents an <b>HTML5</b> node.
 * 
 * @version GIG-HTML5.01.03  
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-03
 * - Updated for new DML node
 */
class Node extends DML\Node
{

    /**
     * @var \GIgenerator\DML\Node Stores an instance of the content-only node containing the scripts. 
     * 
     * @since GIG-HTML5.01.??
     * @version GIG-HTML.02.00 Renamed due to compliance with PSR-1.
     * 
     */
    private $scripts;

    /**
     * Adds a 'script' node as a child of the the html5 object.
     * 
     * @param string $script The script or the file path to the script.
     * @param boolean $external [optional] TRUE if script is an external file. Default FALSE.
     * 
     * @return \GIgenerator\DML\HTML5\Programming\Script
     * 
     * @since GIG-HTML5.01.??
     * @version GIG-HTML.02.00 renamed vars from _scripts to scripts
     * 
     */
    public function addScript($script, $external = false)
    {
        if (isset($this->scripts) == false) {
            $this->scripts = $this->addContentGetPointer(DML\Node::ContentOnly([]));
        }
        return $this->scripts->addContentGetPointer(Category\Programming::Script($script, $external));
    }

    /**
     * Adds a 'script' node that executes when document is ready.
     * 
     * @param       string $script The script or the file path to the script.
     * @since       GIG-HTML5.00.02
     * 
     * @return      \GIgenerator\DML\HTML5\Programming\Script
     * @throws      NA
     * 
     */
    public function addScriptOnDocumentReady($script)
    {
        return $this->addScript("$(document).ready(function () { {$script} });", false);
    }

    /**
     * 
     * @return type
     * @edit SG-HTML5.00.01
     */
    public function __toString()
    {
//        if ($this->_emptyNode == \FALSE) {
//            $this->addContent();
//        }
        return parent::__toString().$this->defineScript();
    }

    /**
     * @return string
     */
    public function defineScript()
    {
        return "";
    }

}
