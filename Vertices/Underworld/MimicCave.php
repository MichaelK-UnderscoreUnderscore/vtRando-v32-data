<?php

use App\Graph\Region;

return [
    [
        'name' => "Mimic Cave Entrance",
        'roomid' => 0x010c,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Mimic Cave Back",
        'roomid' => 0x010c,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Mimic Cave",
        'roomid' => 0x010c,
        'addresses' => [0xE9C5],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
