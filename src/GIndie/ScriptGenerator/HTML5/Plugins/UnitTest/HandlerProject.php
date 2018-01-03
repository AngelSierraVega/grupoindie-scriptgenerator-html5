<?php

/**
 * SG-HTML5 - HandlerProject
 */

namespace GIndie\ScriptGenerator\HTML5\Plugins\UnitTest;

use GIndie\ScriptGenerator\HTML5;

/**
 * Description of HandlerProject
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage HTML5
 *
 * @version SG-HTML5.00.00 18-01-03 [Class/Trait/Interface] created.
 * @edit SG-HTML5.00.01
 * - Added code from DML\UnitTest.php
 */
class HandlerProject extends \GIndie\UnitTest\HandlerProject
{

    /**
     * @since SG-HTML5.00.01
     * @return array
     * @todo Unit test for Node\Tag\Attributes
     */
    public static function projectClasses()
    {
        return [HTML5\Category\Basic::class
            , HTML5\Category\Links::class
            , HTML5\Category\Lists::class
            , HTML5\Category\Meta::class
            , HTML5\Category\Programming::class
            , HTML5\Category\StylesSemantics::class
        ];
    }
    
    /**
     * @since SG-HTML5.00.01
     * @return string
     */
    public static function projectName()
    {
        return "\HTML5";
    }

    /**
     * @since SG-HTML5.00.01
     * @return string
     */
    public static function projectNamespace()
    {
        return "\ScriptGenerator";
    }

    /**
     * @since SG-HTML5.00.01
     * @return string
     */
    public static function projectVendor()
    {
        return "\GIndie";
    }

}
