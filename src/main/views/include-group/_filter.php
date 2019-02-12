<?php
use lo\core\widgets\admin\ExtFilter;

/**
 * @var yii\web\View $this
 * @var \lo\modules\core\main\models\IncludeGroup $model
 */

echo ExtFilter::widget(["model" => $model]);