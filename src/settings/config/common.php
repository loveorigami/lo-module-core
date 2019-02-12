<?php

return [
    'components' => [
        'settings' => [
            'class' => lo\modules\core\settings\components\Settings::class,
            'cache' => 'cacheCommon',
            'cachingDuration' => 3600,
        ],
    ],
];
