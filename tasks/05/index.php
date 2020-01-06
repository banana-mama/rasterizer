<?php

require_once('../../pre.php');

use classes\Canvas;


/**
 * @var Canvas $canvas
 */

$canvas->setBackground([0, 0, 0]);
$canvas->setTriangle(
  ['x' => 5, 'y' => 25, 'r' => 0, 'g' => 255, 'b' => 0],
  ['x' => 20, 'y' => 10, 'r' => 255, 'g' => 0, 'b' => 0],
  ['x' => 35, 'y' => 25, 'r' => 0, 'g' => 0, 'b' => 255]
);

require_once(DOCROOT . 'post.php');