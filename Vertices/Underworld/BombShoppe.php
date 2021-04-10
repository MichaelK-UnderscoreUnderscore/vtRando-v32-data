<?php

use App\Graph\Region;

return [
    [
        'name' => "Bomb Shoppe Lobby",
        'roomid' => 0x011c,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'name' => "Bomb Shoppe Item",
        'roomid' => 0x011c,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'follower',
        'item' => 'BigRedBomb',
    ],
];
