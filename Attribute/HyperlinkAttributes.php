<?php

/**
 * 
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-04-14
 * @version 00.30
 * @edit 18-11-01
 * - Revised version
 * @todo Validate trait using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/*
  require_once __DIR__ . '/Hyperlink/download.php';
  require_once __DIR__ . '/Hyperlink/href.php';
  require_once __DIR__ . '/Hyperlink/hreflang.php';
  require_once __DIR__ . '/Hyperlink/media.php';
  require_once __DIR__ . '/Hyperlink/rel.php';
  require_once __DIR__ . '/Hyperlink/target.php';
  require_once __DIR__ . '/Hyperlink/type.php'; */

/**
 * 
 */
trait HyperlinkAttributes
{

    use hrefTrait;
    use targetTrait;
    use downloadTrait;
}
