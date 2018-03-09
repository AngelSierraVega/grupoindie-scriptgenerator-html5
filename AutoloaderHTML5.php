<?php
/**
 * DVLP-SG1-HTML5 - ProjectHandler
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage HTML5
 *
 * @version SG-HTML5.00.00 17-??-?? Empty file created.
 * @edit SG-HTML5.00.01
 * - Functional autoloader
 * @edit SG-HTML5.00.02 18-02-27
 * - Created projectClasses()
 * - Updated filename
 */

namespace GIndie\ScriptGenerator\HTML5;

/**
 * Autoloader function
 */
\spl_autoload_register(function($className) {
    switch (\substr($className, 0, (\strlen(__NAMESPACE__) * 1)))
    {
        case __NAMESPACE__:
            $edited = \substr($className,
                              \strlen(__NAMESPACE__) + \strrpos($className,
                                                                __NAMESPACE__));
            $edited = \str_replace("\\", \DIRECTORY_SEPARATOR, __DIR__ . $edited) . ".php";
            if (\is_readable($edited)) {
                require_once($edited);
            }
    }
});
