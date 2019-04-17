<?php

/**
 * GI-SG1-HTML5-DVLP - Select
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
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
 * Description of Select
 *
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Select extends Node
{

    /**
     * @since 19-04-01
     */
    use Attribute\autofocusTrait;
    use Attribute\disabledTrait;
    use Attribute\formTrait;
    use Attribute\multipleTrait;
    use Attribute\nameTrait;
    use Attribute\requiredTrait;
    use Attribute\sizeTrait;

    /**
     *
     * @since 19-04-01
     */
    private $selectOptions;

    /**
     * @since 19-04-01
     */
    public function __construct($options)
    {
        parent::__construct(static::TYPE_DEFAULT, "select");
        $this->setOptions($options);
    }

    /**
     * 
     * @param array $options An associative array with either the Value or an Option object. The 
     * keys are the 'ids'.
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Select
     * @since 19-04-01
     */
    public function setOptions($options)
    {
        $this->removeContent();
        $this->selectOptions = [];
        foreach ($options as $key => $value) {
            if (!\is_a($value, Option::class, false)) {
                $this->selectOptions[$key] = new Option($key, $value);
            } else {
                $this->selectOptions[$key] = $value;
            }
            $this->addContent($this->selectOptions[$key]);
        }
        return $this;
    }

}
