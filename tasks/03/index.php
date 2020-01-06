<?php

require_once('../../pre.php');

use classes\Canvas;


/**
 * @var Canvas $canvas
 */

$canvas->setTriangle(
  ['x' => 30, 'y' => 5],
  ['x' => 10, 'y' => 20],
  ['x' => 30, 'y' => 35],
  [[78, 205, 196], [85, 98, 112]]
);

require_once(DOCROOT . 'post.php');