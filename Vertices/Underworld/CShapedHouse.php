<?php

use App\Graph\Region;

return [
    [
        'name' => "C-Shaped House C",
        'roomid' => 0x011c,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "C-Shaped House",
        'roomid' => 0x011c,
        'layout' => Region::BOTTOM_RIGHT,
        'addresses' => [0xE9EF],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
];
