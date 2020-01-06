<?php

use classes\Canvas;


/**
 * @var Canvas $canvas
 */

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rasterizer</title>
    <link rel="stylesheet" type="text/css" href="/styles.css">
</head>
<body>

<section>
    <table>
        <tbody>
        <?php for ($y = 1; $y <= $canvas->getHeight(); $y++): ?>
            <tr>
              <?php for ($x = 1; $x <= $canvas->getWidth(); $x++): ?>
                <?php $color = $canvas->getPixelColors(['x' => $x, 'y' => $y]); ?>
                  <td style="background-color: rgb(<?= $color ?>);">
                    <?php if (true): ?>
                        <p>x: <?= $x ?>;</p>
                        <p>y: <?= $y ?>;</p>
                    <?php endif; ?>
                  </td>
              <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
</section>

</body>
</html>
