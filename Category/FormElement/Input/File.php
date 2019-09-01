<?php

/**
 * GI-SG1-HTML5-DVLP - File
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\FormElement\Input
 *
 * @since 17-08-19
 * @version 00.80
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement\Input;

/**
 * 
 * NOTE: The simple constructor is a design decition. Complexity should be in other projects
 * 
 * @edit 19-04-01
 * - Moved code from HTML5form
 * @todo Add docblock
 * @todo Unit test
 */
class File extends \GIndie\ScriptGenerator\HTML5\Category\FormElement\Input
{
    
    /**
     * accept 	Designates the files types that a server accepts (only used for type="file").
     */
    
    /**
     * @since 17-08-19
     * @edit 18-01-30
     */
    public function __construct()
    {
        parent::__construct("file");
    }
}
