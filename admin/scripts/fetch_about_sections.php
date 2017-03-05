<?php

$sections = scandir('../../data/about');

$output = [];

foreach ($sections as $s) {
    if ($s != '.' && $s != '..') {
        $output[0][] = $s;
        $output[1][] = file_get_contents('../../data/about/' . $s);
    }
}

echo json_encode($output);