<?php

use App\Graph\Region;

return [
    [
        'group' => 9,
        'name' => "Skull Woods - Main Entrance",
        'roomid' => 0x58,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Big Chest Ledge",
        'roomid' => 0x58,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Big Chest",
        'addresses' => [0xE998],
        'type' => 'bigchest',
        'itemset' => ['skull'],
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Main Entrance Door",
        'type' => 'keydoor',
        'key' => 'KeyD3',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Hourglass Top",
        'roomid' => 0x58,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Hourglass Bottom",
        'roomid' => 0x58,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Map Chest",
        'addresses' => [0xE99B],
        'type' => 'chest',
        'itemset' => ['skull'],
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Pinball Door",
        'type' => 'keydoor',
        'key' => 'KeyD3',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Lever Room",
        'roomid' => 0x58,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Pinball Room",
        'roomid' => 0x68,
        'layout' => Region::FULL,
        'type' => 'region',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Pinball Chest",
        'addresses' => [0xE9C8],
        'type' => 'chest',
        'itemset' => ['skull'],
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Pot Prison Room",
        'roomid' => 0x57,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Pot Prison",
        'addresses' => [0xE9A1],
        'type' => 'chest',
        'itemset' => ['skull'],
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Trap Chest Room",
        'roomid' => 0x67,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Compass Chest",
        'addresses' => [0xE992],
        'type' => 'chest',
        'itemset' => ['skull'],
    ],
    [
        'group' => 9,
        'name' => "Skull Woods - Firebar Pits",
        'roomid' => 0x67,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Statue Puzzle",
        'roomid' => 0x57,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Big Key Room",
        'roomid' => 0x57,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Big Key Chest",
        'addresses' => [0xE99E],
        'type' => 'chest',
        'itemset' => ['skull'],
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Magic Refill",
        'roomid' => 0x57,
        'layout' => Region::TOP_RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Falling Floor",
        'roomid' => 0x56,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Dumb Switches Top",
        'roomid' => 0x56,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Dumb Switches Bottom",
        'roomid' => 0x56,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Useless Door",
        'type' => 'keydoor',
        'key' => 'KeyD3',
    ],
    [
        'group' => 10,
        'name' => "Skull Woods - Bumper Buddy",
        'roomid' => 0x56,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 10,
        'roomid' => 0x56,
        'layout' => Region::BOTTOM_LEFT,
        'name' => "Skull Woods - Bumper Buddy - TL Pot",
        'type' => 'pot',
        'item' => 'KeyD3',
        'itemset' => ['skull'],
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Bridge Room",
        'roomid' => 0x59,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Bridge Door",
        'type' => 'keydoor',
        'key' => 'KeyD3',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Bridge Room Alcove",
        'roomid' => 0x59,
        'layout' => Region::LEFT,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Bridge Room Chest",
        'addresses' => [0xE9FE],
        'type' => 'chest',
        'itemset' => ['skull'],
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Gibdo Bridge Room",
        'roomid' => 0x59,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Bari Pits",
        'roomid' => 0x49,
        'layout' => Region::BOTTOM_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Torch Room",
        'roomid' => 0x49,
        'layout' => Region::RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Vine Door Room",
        'roomid' => 0x49,
        'layout' => Region::TOP_LEFT,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Play Pen",
        'roomid' => 0x39,
        'layout' => Region::BOTTOM_LEFT,
        'wallmaster' => true,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Play Pen - Gibdo Key",
        'roomid' => 0x39,
        'type' => 'mob',
        'offset' => 0x04DD73,
        'sprite' => 0x8b,
        'item' => 'KeyD3',
        'itemset' => ['skull'],
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Play Pen - Mini Helmasaur",
        'roomid' => 0x39,
        'type' => 'mob',
        'offset' => 0x04DD79,
        'sprite' => 0x13,
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Play Pen - Hardhat Beetle",
        'roomid' => 0x39,
        'type' => 'mob',
        'offset' => 0x04DD7F,
        'sprite' => 0x26,
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Play Pen - Mini Moldorm",
        'roomid' => 0x39,
        'type' => 'mob',
        'offset' => 0x04DD6D,
        'sprite' => 0x18,
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Play Pen Door",
        'type' => 'keydoor',
        'key' => 'KeyD3',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Boss Drop",
        'roomid' => 0x39,
        'layout' => Region::BOTTOM_RIGHT,
        'wallmaster' => true,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Boss Drop - Spike Trap Bottom",
        'roomid' => 0x39,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'mob',
        'offset' => 0x04DD82,
        'sprite' => 0x8a,
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Boss Drop - Spike Trap Top",
        'roomid' => 0x39,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'mob',
        'offset' => 0x04DD7C,
        'sprite' => 0x8a,
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Boss Room",
        'roomid' => 0x29,
        'layout' => Region::BOTTOM_RIGHT,
        'type' => 'region',
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Boss",
        'addresses' => [0x180155],
        'type' => 'drop',
        'itemset' => ['skull'],
    ],
    [
        'group' => 11,
        'name' => "Skull Woods - Prize",
        'addresses' => [null, 0x120A3, 0x53F12, 0x53F13, 0x180058, 0x18007B, 0xC704],
        'type' => 'prize',
        'itemset' => ['prize'],
    ],
];
