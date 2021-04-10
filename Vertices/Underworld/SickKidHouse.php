<?php

use App\Graph\Region;

return [
    [
        'name' => "Sick Kid House",
        'roomid' => 0x0102,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Sick Kid",
        'roomid' => 0x0102,
        'layout' => Region::LEFT,
        'addresses' => [0x339CF],
        'type' => 'npc',
        'itemset' => ['lw'],
    ],
];
