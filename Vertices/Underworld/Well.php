<?php

use App\Graph\Region;

return [
    [
        'name' => "Kakariko Well",
        'roomid' => 0x2f,
        'layout' => Region::BOTTOM,
        'type' => 'region',
    ],
    [
        'name' => "Kakariko Well Hidden",
        'roomid' => 0x2f,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Kakariko Well - Top",
        'roomid' => 0x2f,
        'layout' => Region::TOP_LEFT,
        'addresses' => [0xEA8E],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Kakariko Well - Left",
        'roomid' => 0x2f,
        'layout' => Region::BOTTOM,
        'addresses' => [0xEA91],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Kakariko Well - Middle",
        'roomid' => 0x2f,
        'layout' => Region::BOTTOM,
        'addresses' => [0xEA94],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Kakariko Well - Right",
        'roomid' => 0x2f,
        'layout' => Region::BOTTOM,
        'addresses' => [0xEA97],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Kakariko Well - Bottom",
        'roomid' => 0x2f,
        'layout' => Region::BOTTOM,
        'addresses' => [0xEA9A],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
