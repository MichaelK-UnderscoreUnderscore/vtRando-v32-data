<?php

use App\Graph\Region;

return [
    [
        'name' => "Waterfall Fairy",
        'roomid' => 0x0114,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Waterfall Fairy - Bottle",
        'roomid' => 0x0114,
        'layout' => Region::BOTTOM_LEFT,
        'addresses' => [0x348FF],
        'type' => 'refill',
        'itemset' => ['bottle'],
    ],
    [
        'name' => "Waterfall Fairy - Left",
        'roomid' => 0x0114,
        'layout' => Region::BOTTOM_LEFT,
        'addresses' => [0xE9B0],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Waterfall Fairy - Right",
        'roomid' => 0x0114,
        'layout' => Region::BOTTOM_LEFT,
        'addresses' => [0xE9D1],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
