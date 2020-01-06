<?php

require_once('../../pre.php');

use classes\Canvas;


/**
 * @var Canvas $canvas
 */

$canvas->setPixel(['x' => 15, 'y' => 15], [78, 205, 196]);
//$canvas->setPixel(['x' => 25, 'y' => 20], [255, 255, 255]);

require_once(DOCROOT . 'post.php');