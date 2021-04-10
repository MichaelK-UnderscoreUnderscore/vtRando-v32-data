<?php

use App\Graph\Region;

return [
    [
        'name' => "Peg Cave",
        'roomid' => 0x0127,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Hammer Pegs",
        'roomid' => 0x0127,
        'layout' => Region::BOTTOM_LEFT,
        'addresses' => [0x180006],
        'type' => 'standing',
        'itemset' => ['dw'],
    ],
];
