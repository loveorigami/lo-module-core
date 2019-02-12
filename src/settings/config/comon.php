<?php

return [
    'components' => [
        'settings' => [
            'class' => lo\modules\core\components\Settings::class,
            'cache' => 'cacheCommon',
            'cachingDuration' => 3600,
        ],
    ],
];