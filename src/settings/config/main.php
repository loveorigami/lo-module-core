<?php

return [
    'modules' => [
        'settings' => [
            'class' => 'lo\modules\core\settings\Module',
			'controllerNamespace' => 'lo\modules\core\settings\controllers',
			'defaultRoute' => 'key-storage'
        ],
    ],
];