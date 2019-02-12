<?php

return [
    'modules' => [
        'permission' => [
            'class' => 'lo\modules\core\permission\Module',
			'controllerNamespace' => 'lo\modules\core\permission\controllers',
			'defaultRoute' => 'constraint'
        ],
    ],
];