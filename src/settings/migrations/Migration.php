<?php
namespace lo\modules\core\settings\migrations;

use lo\core\db\Migration as BaseMigration;

class Migration extends BaseMigration
{
    public $tableGroup = "settings";

    const TBL_ITEM = 'item';
}