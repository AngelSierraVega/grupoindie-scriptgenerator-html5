<?php

/**
 * GI-SG1-HTML5-DVLP - Form
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5
 *
 * @since 17-04-23
 * @version 00.A8
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The form element represents a hyperlink that can be manipulated through a collection of 
 * form-associated elements, some of which can represent editable values that can be submitted to a 
 * server for processing.
 * 
 * The accept-charset attribute gives the character encodings that are to be used for the 
 * submission. If specified, the value must be an ASCII case-insensitive match for "UTF-8". 
 * [ENCODING]
 * 
 * The name attribute represents the form's name within the forms collection. The value must not be 
 * the empty string, and the value must be unique amongst the form elements in the forms collection 
 * that it is in, if any.
 * 
 * The autocomplete attribute is an enumerated attribute. The attribute has two states. The on 
 * keyword maps to the on state, and the off keyword maps to the off state. The attribute may also 
 * be omitted. The missing value default and the invalid value default are the on state. The off 
 * state indicates that by default, form controls in the form will have their autofill field name 
 * set to "off"; the on state indicates that by default, form controls in the form will have their 
 * autofill field name set to "on".
 * 
 * The action, enctype, method, novalidate, and target attributes are attributes for form submission.
 * 
 * The rel attribute on form elements controls what kinds of links the elements create. The 
 * attribute's value must be a unordered set of unique space-separated tokens. The allowed keywords 
 * and their meanings are defined in an earlier section.
 * 
 * rel's supported tokens are the keywords defined in HTML link types which are allowed on form 
 * elements, impact the processing model, and are supported by the user agent. The possible 
 * supported tokens are noreferrer, noopener, and opener. rel's supported tokens must only include 
 * the tokens from this list that the user agent implements the processing model for.
 * 
 * 
 * accept-charset 	Designates the character encodings that are to be used when a form is submitted.
  action 	Designates where to send form data. Typically, this is either an ASP, JavaScript, Perl, PHP, or Python script.
  autocomplete 	Toggles the autocomplete function.
  enctype 	Designates how submitted form data should be encoded.
  method 	Designates the HTTP method used for sending form-data.
  name 	Designates a name for the form.
  novalidate 	Designates that the form should not be validated upon submission.
  target 	Designates where the generated response is displayed upon submission.
 * 
 * //enctype               application/x-www-form-urlencoded multipart/form-data text/plain 	Specifies how the form-data should be encoded when submitting it to the server (only for method="post")
  //novalidate            novalidate 	Specifies that the form should not be validated when submitted
 *
 * 
 * @link <https://html.spec.whatwg.org/dev/forms.html#the-form-element>
 * 
 * @link <https://www.computerhope.com/jargon/h/html-form-tag.htm>
 * 
 * @edit 19-04-01
 * - Moved from HTML5form
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Form extends Node
{

    use Attribute\acceptcharsetTrait;
    use Attribute\actionTrait;
    use Attribute\autocompleteTrait;
    use Attribute\enctypeTrait;
    use Attribute\methodTrait;
    use Attribute\nameTrait;
    use Attribute\novalidateTrait;
    use Attribute\targetTrait;

    /**
     * @since 18-??-??
     */
    public function __construct()
    {
        parent::__construct(static::TYPE_DEFAULT, "form");
    }

}
