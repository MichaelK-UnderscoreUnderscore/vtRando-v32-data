<?php

use App\Graph\Region;

return [
    [
        'name' => "Mini Moldorm Cave Entrance",
        'roomid' => 0x0123,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Mini Moldorm Cave",
        'roomid' => 0x0123,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Mini Moldorm Cave - Far Left",
        'roomid' => 0x0123,
        'addresses' => [0xEB42],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Mini Moldorm Cave - Left",
        'roomid' => 0x0123,
        'addresses' => [0xEB45],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Mini Moldorm Cave - NPC",
        'roomid' => 0x0123,
        'addresses' => [0x180010],
        'type' => 'npc',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Mini Moldorm Cave - Right",
        'roomid' => 0x0123,
        'addresses' => [0xEB48],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Mini Moldorm Cave - Far Right",
        'roomid' => 0x0123,
        'addresses' => [0xEB4B],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
