<?php

use App\Graph\Region;

return [
    [
        'name' => "Drop Great Fairy Antechamber",
        'roomid' => 0x18,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Drop Great Fairy",
        'roomid' => 0x08,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Drop Great Fairy Exit",
        'roomid' => 0x08,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
];
