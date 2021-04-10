<?php

use App\Graph\Region;

return [
    [
        'name' => "King's Tomb",
        'roomid' => 0x0113,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'name' => "King's Tomb Chest",
        'roomid' => 0x0113,
        'layout' => Region::LEFT,
        'addresses' => [0xE97A],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
