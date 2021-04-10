<?php

use App\Graph\Region;

return [
    [
        'name' => "Sprial Cave Top",
        'roomid' => 0xee,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'name' => "Sprial Cave Ledge",
        'roomid' => 0xfe,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Sprial Cave Exit",
        'roomid' => 0xfe,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Spiral Cave",
        'roomid' => 0xfe,
        'layout' => Region::RIGHT,
        'addresses' => [0xE9BF],
        'type' => 'chest',
        'itemset' => ['lw'],
    ],
];
