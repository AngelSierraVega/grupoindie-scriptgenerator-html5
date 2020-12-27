<?php

/**
 * GI-SG1-HTML5-DVLP - Abbreviation
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Phrase
 * @license file://LICENSE
 *
 * @since 18-11-01
 * @version 00.B0
 * 
 * @todo Upgrade project/file structure
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Phrase;

/**
 * When writing in HTML, the <abbr> tag is an inline element used to create an acronym or 
 * abbreviation. It is useful when you want to shorten a word or phrase, but still want to give 
 * additional information to visitors, search engines, and browsers.
 * 
 * Note: This element is unique in that it is a phrase tag, which indicates that a section of 
 * text has structural meaning.
 * 
 * @link <https://www.computerhope.com/jargon/h/html-abbr-tag.htm>
 *
 * @edit 19-02-03
 * - Functional class
 * - Updated dockblock
 */
class Abbreviation extends AbstractPhrase
{

    /**
     * 
     * @param string $abbr The abbreviated version of the text.
     * @param string $title The non-abbreviated version of the text.
     * @param array $attributes Optional associative array defining node attributes.
     * @since 19-02-03
     */
    public function __construct($abbr, $title, $attributes = [])
    {
        parent::__construct(static::TYPE_DEFAULT, "abbr", $attributes, $abbr);
        $this->setTitle($title);
    }

}
