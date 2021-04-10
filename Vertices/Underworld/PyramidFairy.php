<?php

use App\Graph\Region;

return [
    [
        'name' => "Pyramid Fairy",
        'roomid' => 0x0116,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Pyramid Fairy - Bottle",
        'roomid' => 0x0116,
        'layout' => Region::BOTTOM_RIGHT,
        'addresses' => [0x3493B],
        'type' => 'refill',
        'itemset' => ['bottle'],
    ],
    [
        'name' => "Pyramid Fairy - Right",
        'roomid' => 0x0116,
        'addresses' => [0xE983],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
    [
        'name' => "Pyramid Fairy - Left",
        'roomid' => 0x0116,
        'addresses' => [0xE980],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
];
