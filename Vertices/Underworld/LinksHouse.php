<?php

use App\Graph\Region;

return [
    [
        'name' => "Link's House - Bedroom",
        'roomid' => 0x0104,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
        'doorid' => 0x00,
        // 'addresses' => [0x0104, 0x2c, 0x0506, 0x0a9a, 0x0832, 0x0ae8, 0x08b8, 0x0b07, 0x08bf, 0x06, 0xfe, 0x0816, 0x0000],
    ],
    [
        'roomid' => 0x0104,
        'layout' => Region::BOTTOM_RIGHT,
        'name' => "Link's House - Chest",
        'addresses' => [0xE9BC],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
