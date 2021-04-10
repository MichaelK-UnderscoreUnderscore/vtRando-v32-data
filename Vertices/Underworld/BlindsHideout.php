<?php

use App\Graph\Region;

return [
    [
        'name' => "Blind's Hideout Upstairs",
        'roomid' => 0x0119,
        'layout' => Region::BOTTOM,
        'type' => 'region',
    ],
    [
        'name' => "Blind's Hideout Trove",
        'roomid' => 0x011d,
        'layout' => Region::BOTTOM,
        'type' => 'region',
    ],
    [
        'name' => "Blind's Hideout Hidden",
        'roomid' => 0x011d,
        'layout' => Region::TOP,
        'type' => 'region',
    ],
    [
        'name' => "Blind's Hideout - Top",
        'roomid' => 0x011d,
        'layout' => Region::TOP,
        'addresses' => [0xEB0F],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Blind's Hideout - Left",
        'roomid' => 0x011d,
        'layout' => Region::BOTTOM,
        'addresses' => [0xEB12],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Blind's Hideout - Right",
        'roomid' => 0x011d,
        'layout' => Region::BOTTOM,
        'addresses' => [0xEB15],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Blind's Hideout - Far Left",
        'roomid' => 0x011d,
        'layout' => Region::BOTTOM,
        'addresses' => [0xEB18],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Blind's Hideout - Far Right",
        'roomid' => 0x011d,
        'layout' => Region::BOTTOM,
        'addresses' => [0xEB1B],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
