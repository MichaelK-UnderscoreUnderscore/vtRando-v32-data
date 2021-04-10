<?php

use App\Graph\Region;

return [
    [
        'name' => "Tavern",
        'roomid' => 0x0103,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Kakariko Tavern",
        'roomid' => 0x0103,
        'layout' => Region::LEFT,
        'addresses' => [0xE9CE],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
