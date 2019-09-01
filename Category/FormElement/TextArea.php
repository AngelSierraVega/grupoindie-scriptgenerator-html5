<?php

/**
 * GI-SG1-HTML5-DVLP - TextArea
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5
 *
 * @since 19-04-01
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The <textarea> tag defines a multi-line text input control.
 * A text area can hold an unlimited number of characters, and the text renders in a fixed-width 
 * font (usually Courier).
 * The size of a text area can be specified by the cols and rows attributes, or even better; 
 * through CSS' height and width properties.
 * @link <https://www.w3schools.com/tags/tag_textarea.asp>
 * 
 * @edit 19-04-16
 * - Extends Node
 * - Upgraded dockblock
 * - Versión 00.C0 Atributos funcionales y constructor
 */
class TextArea extends Node
{

    /**
     * @since 19-04-16
     */
    use Attribute\autofocusTrait;
    use Attribute\colsTrait;
    use Attribute\dirnameTrait;
    use Attribute\disabledTrait;
    use Attribute\formTrait;
    use Attribute\maxlengthTrait;
    use Attribute\nameTrait;
    use Attribute\placeholderTrait;
    use Attribute\readonlyTrait;
    use Attribute\requiredTrait;
    use Attribute\rowsTrait;
    use Attribute\wrapTrait;

    /**
     * The <textarea> tag defines a multi-line text input control.
     * 
     * @since 19-04-16
     */
    protected function __construct()
    {
        parent::__construct(static::TYPE_DEFAULT, "textarea", null, $content);
    }

}
