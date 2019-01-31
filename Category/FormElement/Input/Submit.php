<?php

/**
 * GI-SG1-HTML5-DVLP - Submit
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 * 
 * @package GIndie\ScriptGenerator\HTML5\FormElement\Input
 *
 * @since 17-08-19
 * @version 00.50
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement\Input;

use GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * 
 * NOTE: The simple constructor is a design decition. Complexity should be in other projects
 * 
 * @edit 19-04-01
 * - Moved code from HTML5form
 * @todo Add docblock
 * @todo Unit test
 */
class Submit extends \GIndie\ScriptGenerator\HTML5\Category\FormElement\Input
{

    /**
     * formaction 	Designates the URL of the file that will process the submitted form data (for type="submit" and type="image").
      formenctype 	Designates how the form data should be encoded upon submission (for type="submit" and type="image").
      formmethod 	Designates the HTTP method to be used when sending data to the formaction URL (for type="submit" and type="image").
     * formtarget 	Designates where to display the response to submitted data (for type="submit" and type="image").
     */
    use Attribute\formactionTrait;
    use Attribute\formenctypeTrait;
    use Attribute\formmethodTrait;
    use Attribute\formtargetTrait;

    /**
     * @since 17-08-19
     * @edit 18-01-30
     */
    public function __construct()
    {
        parent::__construct("submit");
    }

}
