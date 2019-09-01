<?php

/**
 * GI-SG1-HTML5-DVLP - Input
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5
 *
 * @since 19-04-01
 * @version 00.A8
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * When writing in HTML, the <input> tag is an inline element used to create both input fields and 
 * interactive controls for web-based forms. Nested within a <form> tag, they are useful for 
 * allowing the acceptance of user-input data of various types on a website.
 * 
 * @link <https://www.computerhope.com/jargon/h/html-input-tag.htm>
 *
 * @edit 19-04-01
 * - Added code from HTML5form
 * - Implemented traits
 * @todo Validate constructor
 * @todo Unit test
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
abstract class Input extends Node
{

    /**
     * @since 19-04-01
     * accept 	Designates the files types that a server accepts (only used for type="file").
     * alt 	Designates an alternate text for images (only used for type="image").
     * autocomplete 	Toggles the autocomplete function.
     * autofocus 	Designates that an <input> element should be the first thing focused when the page loads.
     * checked 	Designates that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio").
     * disabled 	Designates that the <input> element is disabled.
     * form 	Designates the form(s) of where an <input> element belongs.
     * formnovalidate 	Designates that form data should not be validated upon submission.
     */
    use Attribute\autocompleteTrait;
    use Attribute\autofocusTrait;
    use Attribute\checkedTrait;
    use Attribute\disabledTrait;
    use Attribute\formTrait;
    use Attribute\formnovalidateTrait;

/**
     * height 	Designates the height of the <input> element.
      list 	Points to a <datalist> element containing options for the <input> element.
      max 	Designates the max value of an <input> element.
      maxlength 	Designates the max number of characters allowed in an <input> element.
      min 	Designates the minimum value of an <input> element.
      multiple 	Designates that a user can enter multiple values into an <input> element.
      name 	Designates a name for the <input> element.
      pattern 	Designates a regular expression that an <input> element's value is used to check.
      placeholder 	Designates a message that describes the expected value of an <input> element.
     */
    use Attribute\heightTrait;
    use Attribute\listTrait;
    use Attribute\maxTrait;
    use Attribute\maxlengthTrait;
    use Attribute\minTrait;
    use Attribute\multipleTrait;
    use Attribute\nameTrait;
    use Attribute\patternTrait;
    use Attribute\placeholderTrait;

/**
     * 
      readonly 	Designates that an <input> element is read-only.
      required 	Designates that an input field must be filled out before form submission.
      size 	Designates how many characters wide an <input> element is.
      src 	Designates the URL of the image to use as a submit button.
      step 	Designates the allowed number intervals for an input field.
      type 	Designates the type of <input> element to display.
      value 	Designates the value of an <input> element.
      width 	Designates the width of an <input> element.
     */
    use Attribute\readonlyTrait;
    use Attribute\requiredTrait;
    use Attribute\sizeTrait;
    use Attribute\srcTrait;
    use Attribute\stepTrait;
    use Attribute\typeTrait;
    use Attribute\valueTrait;
    use Attribute\widthTrait;

    /**
     * @since 17-08-19
     * @edit 18-02-27
     */
    protected function __construct($type)
    {
        parent::__construct(static::TYPE_EMPTY_CLOSED, "input", ["type" => $type]);
    }

}
