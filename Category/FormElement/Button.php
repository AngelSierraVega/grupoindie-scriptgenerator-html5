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
 * @version 00.BC
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * When writing in HTML, the <button> tag is an inline element used to create a clickable button. 
 * It is useful when you want to allow users to submit information or perform a search on your 
 * website. 
 * 
 * The following list shows all of the current unique HTML attributes for the <button> tag, 
 * as well as a description of each.
 * 
 * autofocus 	Designates that the button will be focused when the page loads.
 * disabled 	Disables the button.
 * form 	Designates which form(s) belong to the button.
 * formaction 	Designates where form data is sent when the button is clicked.
 * formenctype 	Designates the encoding for form data before sending it to a server.
 * formmethod 	Designates which HTTP method to use when sending form data.
 * formnovalidate 	Designates that form data should not be validated when it is submitted.
 * formtarget 	Designates where to display submitted form data.
 * name 	Designates a name for the button.
 * type 	Designates the button's type.
 * value 	Designates an initial value for the button.
 * 
 * @link <https://www.computerhope.com/jargon/h/html-button-tag.htm>
 * 
 * @todo Unit test
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Button extends Node
{

    use Attribute\autofocusTrait;
    use Attribute\disabledTrait;
    use Attribute\formTrait;
    use Attribute\formactionTrait;
    use Attribute\formenctypeTrait;
    use Attribute\formmethodTrait;
    use Attribute\formnovalidateTrait;
    use Attribute\formtargetTrait;
    use Attribute\nameTrait;
    use Attribute\typeTrait;
    use Attribute\valueTrait;

    /**
     * 
     * @since 18-??-??
     */
    const TYPE_BUTTON = "button";

    /**
     * 
     * @since 18-??-??
     */
    const TYPE_RESET = "reset";

    /**
     * 
     * @since 18-??-??
     */
    const TYPE_SUBMIT = "submit";

    /**
     * 
     * @param mixed|null $content
     * @param string $type
     * @since 18-??-??
     */
    public function __construct($content = null, $type = "button")
    {
        parent::__construct(static::TYPE_DEFAULT, "button", ["type" => $type], $content);
    }

}
