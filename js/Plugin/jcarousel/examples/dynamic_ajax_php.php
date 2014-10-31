<?php

// Array indexes are 0-based, jCarousel positions are 1-based.
$first = max(0, intval($_GET['first']) - 1);
$last  = max($first + 1, intval($_GET['last']) - 1);

$length = $last - $first + 1;

// ---

$images = array(
    'images/temp/199481236_dc98b5abb3_s.jpg',
    'images/temp/199481072_b4a0d09597_s.jpg',
    'images/temp/199481087_33ae73a8de_s.jpg',
    'images/temp/199481108_4359e6b971_s.jpg',
    'images/temp/199481143_3c148d9dd3_s.jpg',
    'images/temp/199481203_ad4cdcf109_s.jpg',
    'images/temp/199481218_264ce20da0_s.jpg',
    'images/temp/199481255_fdfe885f87_s.jpg',
    'images/temp/199480111_87d4cb3e38_s.jpg',
    'images/temp/229228324_08223b70fa_s.jpg',
);

$total    = count($images);
$selected = array_slice($images, $first, $length);

// ---

header('Content-Type: text/xml');

echo '<data>';

// Return total number of images so the callback
// can set the size of the carousel.
echo '  <total>' . $total . '</total>';

foreach ($selected as $img) {
    echo '  <image>' . $img . '</image>';
}

echo '</data>';

?>