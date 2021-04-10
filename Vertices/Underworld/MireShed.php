<?php

use App\Graph\Region;

return [
    [
        'name' => "Mire Shed",
        'roomid' => 0x010d,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Mire Shed - Left",
        'roomid' => 0x010d,
        'addresses' => [0xEA73],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
    [
        'name' => "Mire Shed - Right",
        'roomid' => 0x010d,
        'addresses' => [0xEA76],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
];
