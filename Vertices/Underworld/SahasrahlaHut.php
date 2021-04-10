<?php

use App\Graph\Region;

return [
    [
        'name' => "Sahasrahla's Room",
        'roomid' => 0x0105,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Sahasrahla's Closet",
        'roomid' => 0x0105,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Sahasrahla's Hut - Left",
        'roomid' => 0x0105,
        'layout' => Region::TOP_LEFT,
        'addresses' => [0xEA82],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Sahasrahla's Hut - Middle",
        'roomid' => 0x0105,
        'layout' => Region::TOP_LEFT,
        'addresses' => [0xEA85],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Sahasrahla's Hut - Right",
        'roomid' => 0x0105,
        'layout' => Region::TOP_LEFT,
        'addresses' => [0xEA88],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Sahasrahla",
        'roomid' => 0x0105,
        'layout' => Region::BOTTOM_LEFT,
        'addresses' => [0x2F1FC],
        'type' => 'npc',
        'itemset' => ['lw', 'argh'],
    ],

];
