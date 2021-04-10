<?php

use App\Graph\Region;

return [
    [
        'name' => "Bonk Rocks",
        'roomid' => 0x0124,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Pegasus Rocks",
        'roomid' => 0x0124,
        'layout' => Region::BOTTOM_RIGHT,
        'addresses' => [0xEB3F],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
