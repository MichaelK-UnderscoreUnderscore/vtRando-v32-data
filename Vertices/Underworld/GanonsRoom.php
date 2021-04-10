<?php

use App\Graph\Region;

return [
    [
        'name' => "Ganon's Room",
        'roomid' => 0x00,
        'layout' => Region::TOP_RIGHT,
        'type' => 'region',
    ],
    [
        'name' => "Ganon",
        'roomid' => 0x00,
        'layout' => Region::TOP_RIGHT,
        'type' => 'npc',
        'item' => 'Triforce',
    ],
];
