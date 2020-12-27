<?php

/**
 * GI-SG1-HTML5-DVLP - URL
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\FormElement\Input
 *
 * @since 17-08-19
 * @version 00.50
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
class URL extends \GIndie\ScriptGenerator\HTML5\FormElement\Input
{
    /**
     * @since 17-08-19
     * @edit 18-01-30
     */
    public function __construct()
    {
        parent::__construct("url");
    }
}
