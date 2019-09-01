<?php

/**
 * GI-SG1-HTML5-DVLP - Label
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5
 *
 * @since 18-02-03
 * @version 00.80
 */

namespace GIndie\ScriptGenerator\HTML5\Category\FormElement;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Description of Label
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Label extends Node
{

    /**
     * @since SG-HTML5.00.01
     * @param mixed|null $content
     */
    public function __construct($content = null)
    {
        parent::__construct(static::TYPE_DEFAULT, "label");
        $content == null ?: $this->addContent($content);
    }

}
