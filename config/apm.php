<?php

return [
    'enabled' => env('APM', false),
    'excluded' => [
        'apm'
    ],
    'middlewares' => [
        'web'
    ]
];