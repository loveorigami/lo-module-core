<?php

return [
    'components' => [
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                /* Uncomment this code to use DbMessageSource**/
                '*' => [
                    'class' => yii\i18n\DbMessageSource::class,
                    'sourceMessageTable' => '{{%i18n__source_message}}',
                    'messageTable' => '{{%i18n__message}}',
                    'enableCaching' => true,
                    'cache' => 'cacheCommon',
                    'cachingDuration' => 3600,
                    'on missingTranslation' => [
                        lo\modules\core\i18n\Module::class, 'missingTranslation'
                    ]
                ],
            ],
        ],
    ],
];