<?php

/**
 * GI-SG1-HTML5-DVLP - Option
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5
 *
 * @since 19-04-01
 * @version 00.A0
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * 
 */
class Option extends Node
{

    /**
     * @since 19-04-01
     */
    use Attribute\globalAttributes;
    use Attribute\disabledTrait;
    use Attribute\labelTrait;
    use Attribute\selectedTrait;
    use Attribute\valueTrait;

    /**
     * 
     * @param string $value
     * @param string $content
     * 
     * @since 19-04-01
     */
    public function __construct($value, $content)
    {
        parent::__construct(static::TYPE_DEFAULT, "option", ["value" => $value], [$content]);
    }

}