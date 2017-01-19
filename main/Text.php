<?php

/*
 * Copyright (C) 2016 Angel
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace GIndie\DML\HTML5;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Format {

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Strong($content) {
        try {
            return Factory::Simple("strong", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @return \GIndie\DML\HTML5\Node
     */
    public static function BreakLine() {
        try {
            return Factory::Empty_("br");
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Bold($content) {
        try {
            return Factory::Simple("b", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * 
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param \GIndie\DML\HTML5\GIndie\DML\HTML5\Node $code
     * @return GIndie\DML\HTML5\Node
     */
    public static function Code(GIndie\DML\HTML5\Node $code) {
        try {
            return Factory::Simple("code", [], [$code]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Italic($content) {
        try {
            return Factory::Simple("i", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Small($content) {
        try {
            return Factory::Simple("small", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Header1($content,array $attributes = []) {
        try {
            return Factory::Simple("h1", $attributes, [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Header2($content,array $attributes = []) {
        try {
            return Factory::Simple("h2", $attributes, [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Header3($content,array $attributes = []) {
        try {
            return Factory::Simple("h3", $attributes, [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Header4($content,array $attributes = []) {
        try {
            return Factory::Simple("h4", $attributes, [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Header5($content,array $attributes = []) {
        try {
            return Factory::Simple("h5", $attributes, [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Header6($content,array $attributes = []) {
        try {
            return Factory::Simple("h6", $attributes, [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Paragraph($content) {
        try {
            return Factory::Simple("p", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}
