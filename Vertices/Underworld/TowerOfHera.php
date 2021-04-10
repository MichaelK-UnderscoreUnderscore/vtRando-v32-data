<?php

use App\Graph\Region;

return [
    [
        'group' => 5,
        'name' => "Tower Of Hera - Entrance",
        'roomid' => 0x77,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Crystal Switch",
        'roomid' => 0x77,
        'layout' => Region::FULL,
        'type' => 'switch',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Entrance - Blue Pegs - Lower",
        'roomid' => 0x77,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Entrance Orange Pegs - Lower",
        'roomid' => 0x77,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Entrance - Blue Pegs - Upper",
        'roomid' => 0x77,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Entrance Orange Pegs - Upper",
        'roomid' => 0x77,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower of Hera - Map Chest",
        'type' => 'chest',
        'addresses' => [0xE9AD],
        'itemset' => ['hera']
    ],
    [
        'group' => 5,
        'name' => "Tower of Hera - Basement Door",
        'type' => 'keydoor',
        'key' => 'KeyP3',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Tile Room",
        'roomid' => 0x87,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Basement Corner",
        'roomid' => 0x87,
        'layout' => Region::TOP_RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Hidden Chest",
        'roomid' => 0x87,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Moldorm Cage",
        'roomid' => 0x87,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower of Hera - Big Key Chest",
        'type' => 'chest',
        'addresses' => [0xE9E6],
        'itemset' => ['hera']
    ],
    [
        'group' => 5,
        'name' => "Tower of Hera - Basement Cage",
        'type' => 'chest',
        'addresses' => [0x180162],
        'itemset' => ['hera']
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Beetle Gate",
        'roomid' => 0x31,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Beetle Trap",
        'roomid' => 0x31,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Maze",
        'roomid' => 0x31,
        'layout' => Region::TOP,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Petting Zoo",
        'roomid' => 0x27,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower of Hera - Compass Chest",
        'type' => 'chest',
        'addresses' => [0xE9FB],
        'itemset' => ['hera']
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Bumper Room",
        'roomid' => 0x17,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Fairy Refill",
        'roomid' => 0xA7,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Petting Zoo - Ledge",
        'roomid' => 0x27,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower of Hera - Big Chest",
        'type' => 'bigchest',
        'addresses' => [0xE9F8],
        'itemset' => ['hera']
    ],
    [
        'group' => 5,
        'name' => "Tower Of Hera - Boss Room",
        'roomid' => 0x07,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 5,
        'name' => "Tower of Hera - Boss",
        'addresses' => [0x180152],
        'type' => 'drop',
        'itemset' => ['hera'],
    ],
    [
        'group' => 5,
        'name' => "Tower of Hera - Prize",
        'addresses' => [null, 0x120A5, 0x53F0A, 0x53F0B, 0x18005A, 0x18007A, 0xC706],
        'type' => 'prize',
        'itemset' => ['prize'],
    ],
];
