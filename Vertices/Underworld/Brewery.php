<?php

use App\Graph\Region;

return [
    [
        'name' => "Brewery Room",
        'roomid' => 0x0106,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Brewery",
        'roomid' => 0x0106,
        'layout' => Region::BOTTOM_RIGHT,
        'addresses' => [0xE9EC],
        'type' => 'chest',
        'itemset' => ['dw'],
    ],
];
