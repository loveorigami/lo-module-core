<?php

namespace lo\modules\core\core\migrations;

use m140602_111327_create_menu_table;
use Yii;

require(Yii::getAlias('@mdm/admin/migrations/m140602_111327_create_menu_table.php'));

class m140703_123056_backend_menu extends m140602_111327_create_menu_table
{
}