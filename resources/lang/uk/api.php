<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'error' => [
        'chat' => [
            'empty' => 'Неможливо надіслати пусте повідомлення.',
            'limit_exceeded' => 'Ви надсилаєте повідомлення занадто швидко, зачекайте, будь ласка, й спробуйте ще раз.',
            'too_long' => 'Повідомлення, яке ви намагаєтесь надіслати, надто довге.',
        ],
    ],

    'scopes' => [
        'bot' => 'Виступати в ролі чат-бота.',
        'identify' => 'Ідентифікувати вас і читати загальнодоступні дані.',

        'chat' => [
            'read' => '',
            'write' => 'Надсилати повідомлення від вашого імені.',
            'write_manage' => '',
        ],

        'forum' => [
            'write' => 'Створювати та редагувати теми й пости на форумі від вашого імені.',
        ],

        'friends' => [
            'read' => 'Подивіться, на кого ви підписані.',
        ],

        'public' => 'Читати публічні дані від вашого імені.',
    ],
];
