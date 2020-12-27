<?php

/**
 * GI-SG1-HTML5-DVLP - Emphasis
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Phrase
 *
 * @since 18-11-01
 * @version 01.00
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Phrase;

/**
 * The HTML <em> tag is used in HTML to give emphasis to a certain block of text. 
 * By default, the <em> tag is an inline element that can be nested, and each 
 * level of nesting increases the degree of emphasis.
 * 
 * Note: The <em> tag is a phrase tag, which indicates that a section of text 
 * has structural meaning.
 * 
 * While the <em> tag does not have any unique attributes, it does utilize all 
 * of the standard attributes.
 * 
 * @link <https://www.computerhope.com/jargon/h/html-em-tag.htm>
 * 
 */
class Emphasis extends AbstractPhrase
{

    /**
     * Creates a new Emphasis node.
     *
     * @since 18-11-01
     * @param mixed $content The content of the Emphasis node.
     */
    public function __construct($content)
    {
        parent::__construct(static::TYPE_DEFAULT, "em", [], $content);
    }

}
