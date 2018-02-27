<?php

/**
 * DVLP-SG1-HTML5 - Frames
 */

namespace GIndie\ScriptGenerator\HTML5\Category;

/**
 * Description of Frames
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage HTML5
 *
 * @version SG-HTML5.00.00 18-02-04 Empty class created.
 * @edit SG-HTML5.00.01
 * - Created iframe()
 */
class Frames
{

    /**
     * @since SG-HTML5.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\Frames\IFrame
     */
    public static function iframe()
    {
        return \GIndie\ScriptGenerator\HTML5\Category\Frames\IFrame::instance();
    }

}
