<?php

use App\Graph\Region;

return [
    [
        'name' => "Graveyard Cave",
        'roomid' => 0x011b,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Graveyard Cave - Hidden Room",
        'roomid' => 0x011b,
        'layout' => Region::TOP_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Graveyard Cave Item",
        'roomid' => 0x011b,
        'layout' => Region::TOP_RIGHT,
        'addresses' => [0x180004],
        'type' => 'standing',
        'itemset' => ['lw'],
    ],
];
