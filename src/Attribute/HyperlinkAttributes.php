<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Attribute;

require_once __DIR__ . '/Hyperlink/download.php';
require_once __DIR__ . '/Hyperlink/href.php';
require_once __DIR__ . '/Hyperlink/hreflang.php';
require_once __DIR__ . '/Hyperlink/media.php';
require_once __DIR__ . '/Hyperlink/rel.php';
require_once __DIR__ . '/Hyperlink/target.php';
require_once __DIR__ . '/Hyperlink/type.php';

trait HyperlinkAttributes {

    use Hyperlink\hrefTrait;
    use Hyperlink\targetTrait;
    use Hyperlink\downloadTrait;
}
