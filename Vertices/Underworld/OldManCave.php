<?php

use App\Graph\Region;

return [
    [
        'name' => "Old Man Cave Ledge darkness",
        'type' => 'region',
        'dark' => true,
    ],
    [
        'name' => "Old Man Cave Ledge",
        'roomid' => 0xf0,
        'layout' => Region::FULL,
        'type' => 'region',
        'dark' => true,
    ],
    [
        'name' => "Old Man Lost",
        'roomid' => 0xf0,
        'layout' => Region::FULL,
        'item' => 'OldManLost',
        'type' => 'npc',
        'itemset' => ['lw'],
        'dark' => true,
    ],
    [
        'name' => "Old Man Maze",
        'roomid' => 0xf1,
        'layout' => Region::FULL,
        'type' => 'region',
        'dark' => true,
    ],
    [
        'name' => "Old Man Maze darkness",
        'type' => 'region',
        'dark' => true,
    ],

];
