<?php
define('DOCROOT', ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR));
require_once(DOCROOT . 'classes/Canvas.php');

use classes\Canvas;


$canvas = new Canvas(['w' => 40, 'h' => 40], [255, 107, 107]);