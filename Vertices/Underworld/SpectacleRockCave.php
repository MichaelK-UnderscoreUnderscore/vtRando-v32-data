<?php

use App\Graph\Region;

return [
    [
        'name' => "Spectacle Rock Cave Top",
        'roomid' => 0xea,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Spectacle Rock Cave Middle",
        'roomid' => 0xfa,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Spectacle Rock Cave Ledge",
        'roomid' => 0xea,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Spectacle Rock Cave Fairies",
        'roomid' => 0xfa,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Spectacle Rock Cave Exit",
        'roomid' => 0xf9,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Spectacle Rock Cave",
        'roomid' => 0xea,
        'layout' => Region::FULL,
        'addresses' => [0x180002],
        'type' => 'standing',
        'itemset' => ['lw'],
    ],
];
