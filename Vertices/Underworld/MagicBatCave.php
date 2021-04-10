<?php

use App\Graph\Region;

return [
    [
        'name' => "Magic Bat Entry",
        'roomid' => 0xe3,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Magic Bat Alter",
        'roomid' => 0xe3,
        'layout' => Region::TOP_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Magic Bat Exit",
        'roomid' => 0xe3,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Magic Bat",
        'roomid' => 0xe3,
        'layout' => Region::LEFT,
        'addresses' => [0x180015],
        'type' => 'npc',
        'itemset' => ['lw'],
    ],
];
