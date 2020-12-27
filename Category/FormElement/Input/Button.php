<?php

/**
 * GI-SG1-HTML5-DVLP - Button
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5
 *
 * @since 19-04-01
 * @version 00.80
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement\Input;

/**
 * Defines a clickable button (mostly used with a JavaScript to activate a script)
 * 
 * @link <https://www.w3schools.com/tags/att_input_type.asp>
 * 
 * @edit 19-04-01
 * - Added code from HTML5form
 * 
 * @todo Validate docblock
 * @todo Unit test
 */
class Button extends \GIndie\ScriptGenerator\HTML5\Category\FormElement\Input
{

    /**
     * @since 17-08-19
     * @edit 18-01-30
     */
    public function __construct()
    {
        parent::__construct("button");
    }

}
