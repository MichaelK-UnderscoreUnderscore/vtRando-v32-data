<?php

use App\Graph\Region;

return [
    [
        'name' => "Spike Cave Entrance",
        'roomid' => 0x0117,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Spike Cave Spike Floor Start",
        'roomid' => 0x0117,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Spike Cave Spike Floor End",
        'roomid' => 0x0117,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Spike Cave Refill",
        'roomid' => 0x0117,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Spike Cave",
        'roomid' => 0x0117,
        'layout' => Region::FULL,
        'addresses' => [0xEA8B],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
];
