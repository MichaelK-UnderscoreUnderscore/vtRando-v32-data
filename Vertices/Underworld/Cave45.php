<?php

use App\Graph\Region;

return [
    [
        'name' => "Cave 45 Right",
        'roomid' => 0x011b,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Cave 45 Left",
        'roomid' => 0x011b,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Cave 45",
        'roomid' => 0x011b,
        'layout' => Region::BOTTOM_RIGHT,
        'addresses' => [0x180003],
        'type' => 'standing',
        'itemset' => ['lw'],
    ],
];
