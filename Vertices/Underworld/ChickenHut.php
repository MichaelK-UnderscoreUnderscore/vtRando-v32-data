<?php

use App\Graph\Region;

return [
    [
        'name' => "Chicken Hut",
        'roomid' => 0x0108,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Chicken Hut Hidden Room",
        'roomid' => 0x0108,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Chicken House",
        'roomid' => 0x0108,
        'layout' => Region::BOTTOM_RIGHT,
        'addresses' => [0xE9E9],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],

];
