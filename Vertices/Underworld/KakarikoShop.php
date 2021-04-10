<?php

use App\Graph\Region;

return [
    [
        'name' => "Kakariko Shop",
        'roomid' => 0x011f,
        'layout' => Region::BOTTOM_LEFT,
        'shop' => true,
        'type' => 'region',
    ],
    [
        'name' => "Kakariko Shop - Left",
        'roomid' => 0x011f,
        'type' => 'shopitem',
        'item' => 'RedPotion',
        'cost' => 150,
        'itemset' => ['lw'],
    ],
    [
        'name' => "Kakariko Shop - Middle",
        'roomid' => 0x011f,
        'type' => 'shopitem',
        'item' => 'Heart',
        'cost' => 10,
        'itemset' => ['lw'],
    ],
    [
        'name' => "Kakariko Shop - Right",
        'roomid' => 0x011f,
        'type' => 'shopitem',
        'item' => 'TenBombs',
        'cost' => 50,
        'itemset' => ['lw'],
    ],
];
