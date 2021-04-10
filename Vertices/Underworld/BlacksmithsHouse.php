<?php

use App\Graph\Region;

return [
    [
        'name' => "Blacksmith House",
        'roomid' => 0x0121,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Blacksmith",
        'roomid' => 0x0121,
        'layout' => Region::BOTTOM_LEFT,
        'addresses' => [0x18002A],
        'type' => 'npc',
        'itemset' => ['lw'],
    ],
];
