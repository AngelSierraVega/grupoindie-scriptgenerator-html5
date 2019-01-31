<?php

/**
 * GI-SG1-HTML5-DVLP - Text
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\FormElement\Input
 *
 * @since 17-08-19
 * @version 00.40
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
class Text extends \GIndie\ScriptGenerator\HTML5\Category\FormElement\Input
{
    //autocomplete 	Sets or returns the value of the autocomplete attribute of a text field
    //autofocus 	Sets or returns whether a text field should automatically get focus when the page loads
    //defaultValue 	Sets or returns the default value of a text field
    //disabled 	Sets or returns whether the text field is disabled, or not
    //form 	Returns a reference to the form that contains the text field
    //list 	Returns a reference to the datalist that contains the text field
    //maxLength 	Sets or returns the value of the maxlength attribute of a text field
    //pattern 	Sets or returns the value of the pattern attribute of a text field
    //placeholder 	Sets or returns the value of the placeholder attribute of a text field
    //readOnly 	Sets or returns whether a text field is read-only, or not
    //required 	Sets or returns whether the text field must be filled out before submitting a form
    //size 	Sets or returns the value of the size attribute of a text field

    /**
     * @since 17-08-19
     * @edit 18-01-30
     */
    public function __construct()
    {
        parent::__construct("text");
    }
}
