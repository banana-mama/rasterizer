<?php

require_once('../../pre.php');

use classes\Canvas;


/**
 * @var Canvas $canvas
 */

$canvas->setBackground([0, 0, 0]);
$canvas->setTriangle(
  ['x' => 30, 'y' => 5, 'r' => 255, 'g' => 255, 'b' => 0],
  ['x' => 10, 'y' => 20, 'r' => 0, 'g' => 255, 'b' => 255],
  ['x' => 30, 'y' => 35, 'r' => 255, 'g' => 0, 'b' => 255]
);

require_once(DOCROOT . 'post.php');