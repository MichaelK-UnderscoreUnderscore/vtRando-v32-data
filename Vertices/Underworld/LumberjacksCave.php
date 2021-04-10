<?php

use App\Graph\Region;

return [
    [
        'name' => "Lumberjacks Cave Fairies",
        'roomid' => 0xe2,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Lumberjacks Cave Ledge",
        'roomid' => 0xe2,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Lumberjack Tree",
        'roomid' => 0xe2,
        'layout' => Region::RIGHT,
        'addresses' => [0x180001],
        'type' => 'standing',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Lumberjacks Cave",
        'roomid' => 0xe2,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
];
