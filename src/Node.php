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

namespace GIndie\Generator\DML\HTML5;

/**
 * Represents an <b>HTML5</b> node.
 * 
 * @version GIG-HTML5.01.03  
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Node extends DML\Node\Node
{
    /**
     * @var \GIgenerator\DML\Node  $_scripts Stores an instance of the node containing the scripts. 
     * 
     * @version GIG-HTML5.00.01
     * 
     * @since GIG-HTML5.01.??
     * 
     */
    private $_scripts;

    /**
     * Adds a 'script' node as a child of the the html5 object.
     * 
     * @version     GIG-HTML5.00.01
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
    public function addScript($script, $external = FALSE)
    {
        if (isset($this->_scripts) == FALSE) {
            $this->_scripts = $this->addContentGetPointer(DML\Node::ContentOnly([]));
        }
        return $this->_scripts->addContentGetPointer(Category\Programming::Script($script,
                                                                                  $external));
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
        return $this->addScript("$(document).ready(function () { {$script} });",
                                false);
    }

    public function __toString()
    {
        if ($this->_emptyNode == \FALSE) {
            $this->addContent($this->defineScript());
        }
        return parent::__toString();
    }

    /**
     * @return string
     */
    public function defineScript()
    {
        return "";
    }

}
