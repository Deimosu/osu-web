<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'error' => [
        'chat' => [
            'empty' => 'Нельзя отправить пустое сообщение.',
            'limit_exceeded' => 'Вы слишком часто отправляете сообщения. Пожалуйста, немного подождите.',
            'too_long' => 'Сообщение, которое вы пытаетесь отправить, слишком длинное.',
        ],
    ],

    'scopes' => [
        'bot' => 'Функционировать как чат-бот.',
        'identify' => 'Идентифицировать вас и читать общедоступные данные.',

        'chat' => [
            'read' => '',
            'write' => 'Отправлять сообщения от вашего имени.',
            'write_manage' => '',
        ],

        'forum' => [
            'write' => 'Создавать и редактировать темы и посты на форуме от вашего имени.',
        ],

        'friends' => [
            'read' => 'Видеть список ваших друзей.',
        ],

        'public' => 'Читать публичные данные от вашего имени.',
    ],
];
