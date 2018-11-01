<?php

namespace GIndie\ScriptGenerator\HTML5\Category\Phrase;

/**
 * The HTML <code> tag is an inline HTML element used to designate that a 
 * section of text is computer code (mono-spaced font).
 * 
 * @link <https://www.computerhope.com/jargon/h/html-code-tag.htm>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Phrase
 * 
 * @version 01.00
 * @edit 18-11-01
 * - Revised version
 *
 * @since 18-05-16
 */
class Code extends AbstractPhrase
{

    /**
     * Creates a new Code node.
     *
     * @since 18-05-16
     * @param mixed $content The content of the Code.
     */
    public function __construct($content)
    {
        parent::__construct(static::TYPE_DEFAULT, "code", [], $content);
    }

}
