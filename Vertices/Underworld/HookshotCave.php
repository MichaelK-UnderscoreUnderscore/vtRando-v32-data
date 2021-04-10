<?php

use App\Graph\Region;

return [
    [
        'name' => "Hookshot Cave",
        'roomid' => 0x3c,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave Cross",
        'roomid' => 0x2c,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave Corner",
        'roomid' => 0x2c,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave Fairy",
        'roomid' => 0x2c,
        'layout' => Region::TOP_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave Faires",
        'roomid' => 0x2c,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave - TR Pad",
        'roomid' => 0x3c,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave - TL Pad",
        'roomid' => 0x3c,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave - BR Pad",
        'roomid' => 0x3c,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave - BL Pad",
        'roomid' => 0x3c,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Hookshot Cave - Top Right",
        'roomid' => 0x3c,
        'addresses' => [0xEB51],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
    [
        'name' => "Hookshot Cave - Top Left",
        'roomid' => 0x3c,
        'addresses' => [0xEB54],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
    [
        'name' => "Hookshot Cave - Bottom Left",
        'roomid' => 0x3c,
        'addresses' => [0xEB57],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
    [
        'name' => "Hookshot Cave - Bottom Right",
        'roomid' => 0x3c,
        'addresses' => [0xEB5A],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
];
