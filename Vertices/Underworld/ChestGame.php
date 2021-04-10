<?php

use App\Graph\Region;

return [
    [
        'name' => "Chest Game Room",
        'roomid' => 0x0106,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Chest Game",
        'roomid' => 0x0106,
        'layout' => Region::BOTTOM_LEFT,
        'addresses' => [0xEDA8],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
];
