<?php

use App\Graph\Region;

return [
    [
        'name' => "Potion Shop",
        'roomid' => 0x0109,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Potion Shop Item",
        'roomid' => 0x0109,
        'layout' => Region::BOTTOM_LEFT,
        'addresses' => [0x180014],
        'type' => 'standing',
        'itemset' => ['lw'],
    ],
    [
        'name' => "Potion Shop - Left",
        'roomid' => 0x0109,
        'type' => 'shopitem',
        'item' => 'RedPotion',
        'cost' => 120,
        'itemset' => ['lw'],
    ],
    [
        'name' => "Potion Shop - Middle",
        'roomid' => 0x0109,
        'type' => 'shopitem',
        'item' => 'GreenPotion',
        'cost' => 60,
        'itemset' => ['lw'],
    ],
    [
        'name' => "Potion Shop - Right",
        'roomid' => 0x0109,
        'type' => 'shopitem',
        'item' => 'BluePotion',
        'cost' => 160,
        'itemset' => ['lw'],
    ],
];
