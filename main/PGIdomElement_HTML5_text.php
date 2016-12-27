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

/**
 * Description of PGIdomElement_HTML5_text
 *
 * @author Angel
 */
class PGIdomElement_HTML5_text {
    
    /**
     * Description of formatStrong
     * 
     * @version alpha.03.01
     */
    public static function formatStrong($text) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("strong");
            $rtnDOM->PGIpushText($text);
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIbreakLine
     * 
     * @version alpha.03.01
     */
    public static function PGIbreakLine() {
        try {
            $rtnDOM = new PGIdomElement_HTML5("br", FALSE);
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIformatBold
     * 
     * @version alpha.03.01
     */
    public static function PGIformatBold($text) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("b");
            $rtnDOM->PGIpushContent($text);
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIformatCode
     * 
     * @version alpha.03.01
     */
    public static function PGIformatCode(PGIdomElement $code) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("code");
            $rtnDOM->PGIpushContent($code->PGIgetRenderizedString(TRUE));
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIformatItalic
     * 
     * @version alpha.03.01
     */
    public static function PGIformatItalic($text) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("i");
            $rtnDOM->PGIpushContent($text);
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIformatSmall
     * 
     * @version alpha.03.01
     */
    public static function PGIformatSmall($text) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("small");
            $rtnDOM->PGIpushContent($text);
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIheader1
     * 
     * @version alpha.03.01
     */
    public static function PGIheader1($text = NULL) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("h1");
            if ($text !== NULL) {
                $rtnDOM->PGIpushContent($text);
            }
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIheader2
     * 
     * @version alpha.03.01
     */
    public static function PGIheader2($text = NULL) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("h2");
            if ($text !== NULL) {
                $rtnDOM->PGIpushContent($text);
            }
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIheader3
     * 
     * @version alpha.03.01
     */
    public static function PGIheader3($text = NULL) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("h3");
            if ($text !== NULL) {
                $rtnDOM->PGIpushContent($text);
            }
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIheader4
     * 
     * @version alpha.03.01
     */
    public static function PGIheader4($text = NULL) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("h4");
            if ($text !== NULL) {
                $rtnDOM->PGIpushContent($text);
            }
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIheader5
     * 
     * @version alpha.03.01
     */
    public static function PGIheader5($text = NULL) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("h5");
            if ($text !== NULL) {
                $rtnDOM->PGIpushContent($text);
            }
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIheader6
     * 
     * @version alpha.03.01
     */
    public static function PGIheader6($text = NULL) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("h6");
            if ($text !== NULL) {
                $rtnDOM->PGIpushContent($text);
            }
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIparagraph
     * 
     * @version alpha.03.01
     */
    public static function PGIparagraph($text = NULL) {
        try {
            $rtnDOM = new PGIdomElement_HTML5("p");
            if ($text !== NULL) {
                $rtnDOM->PGIpushContent($text);
            }
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}
