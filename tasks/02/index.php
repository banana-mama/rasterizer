<?php

require_once('../../pre.php');

use classes\Canvas;


/**
 * @var Canvas $canvas
 */

if (true) {
  $canvas->setLine(
    ['x' => 10, 'y' => 30],
    ['x' => 30, 'y' => 10],
    [78, 205, 196]
  );
} else {
  $canvas->setLine(
    ['x' => 10, 'y' => 30],
    ['x' => 15, 'y' => 10],
    [78, 205, 196]
  );
}

require_once(DOCROOT . 'post.php');